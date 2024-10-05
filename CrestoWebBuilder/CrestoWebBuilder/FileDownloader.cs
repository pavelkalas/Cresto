using System.Net;

namespace CrestoWebBuilder
{
    internal class FileDownloader
    {
        /// <summary>
        /// WebClient instance.
        /// </summary>
        private WebClient webClient;

        public FileDownloader()
        {
            this.webClient = new();
        }

        /// <summary>
        /// Downloads file from server.
        /// </summary>
        /// <param name="url">URL where is FILE located.</param>
        /// <param name="outputDirectory">File output directory</param>
        public void Download(string url, string outputDirectory, string outputFileName)
        {
            webClient.DownloadFile(url, outputDirectory + "\\" + outputFileName);
        }
    }
}
