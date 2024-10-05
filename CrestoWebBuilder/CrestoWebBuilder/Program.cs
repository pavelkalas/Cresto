namespace CrestoWebBuilder
{
    internal class Program
    {
        /// <summary>
        /// FileDownloader instance
        /// </summary>
        private static readonly FileDownloader fileDownloader = new();

        static void Main(string[] args)
        {
            Console.Title = "Cresto web builder v1.0";

            Console.WriteLine("+--------------------+");
            Console.WriteLine("| Cresto web builder |");
            Console.WriteLine("+--------------------+\n");

            string projectPath = GetProjectPath();
            DateTime creatingStarted = DateTime.Now;

            Directory.CreateDirectory(projectPath);

            if (Directory.Exists(projectPath))
            {
                string requirementsPath = Path.Combine(projectPath, "requirements.txt");
                fileDownloader.Download("https://raw.githubusercontent.com/pavelkalas/Cresto/refs/heads/main/requirements.txt", projectPath, "requirements.txt");

                if (File.Exists(requirementsPath))
                {
                    string requirementContent = File.ReadAllText(requirementsPath);

                    CreateDirectories(requirementContent, projectPath);

                    DownloadFiles(requirementContent, projectPath);

                    Console.WriteLine("Downloading complete! Took " + (DateTime.Now - creatingStarted).Milliseconds + " ms");

                    File.Delete(requirementsPath);
                }

                Console.WriteLine("\nPress any key to continue...");
                Console.ReadKey();
            }
        }

        /// <summary>
        /// Get name and checks if directory already exists.
        /// </summary>
        private static string GetProjectPath()
        {
            string projectPath;

            do
            {
                Console.Write("Project name: ");
                projectPath = Console.ReadLine()!.Trim();

                if (Directory.Exists(projectPath))
                {
                    Console.WriteLine("Directory already exists. Try another name!\n");
                }
            }
            while (Directory.Exists(projectPath));

            return projectPath;
        }

        /// <summary>
        /// Create files defined in requirements.txt
        /// </summary>
        private static void CreateDirectories(string requirementContent, string projectPath)
        {
            Console.WriteLine("Creating directories:\n");
            foreach (var line in requirementContent.Split('\n'))
            {
                if (!line.Contains('#') && line.Contains("makedir"))
                {
                    string directory = line.Trim().Substring(7).Trim();
                    string directoryPath = Path.Combine(projectPath, directory);
                    Directory.CreateDirectory(directoryPath);

                    Console.WriteLine(" + Creating directory: " + directory);
                }
            }
        }

        /// <summary>
        /// Downloads a defined files in requirements.txt
        /// </summary>
        private static void DownloadFiles(string requirementContent, string projectPath)
        {
            Console.WriteLine("\nDownloading Cresto files:\n");
            foreach (var line in requirementContent.Split('\n'))
            {
                if (!line.Contains('#') && line.Contains("download"))
                {
                    string[] parameters = line.Trim().Substring(8).Split(';');

                    if (parameters.Length >= 3)
                    {
                        string url = parameters[0].Trim();
                        string path = parameters[1].Trim();
                        string fileName = parameters[2].Trim();

                        string fullPath = Path.Combine(projectPath, path);
                        fileDownloader.Download(url, fullPath, fileName);

                        Console.WriteLine(" + Downloading " + url);
                    }
                }
            }
        }
    }
}
