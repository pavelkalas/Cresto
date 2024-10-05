namespace CrestoWebBuilder
{
    internal class Program
    {
        /// <summary>
        /// FileDownloader instance
        /// </summary>
        private static FileDownloader fileDownloader = new();

        static void Main(string[] args)
        {
            fileDownloader.Download("https://raw.githubusercontent.com/pavelkalas/Cresto/refs/heads/main/requirements.txt", Environment.CurrentDirectory, "requirements.txt");
            

        }
    }
}
