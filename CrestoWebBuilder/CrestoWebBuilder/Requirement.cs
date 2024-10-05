namespace CrestoWebBuilder
{
    internal class Requirement
    {
        /// <summary>
        /// URL to file
        /// </summary>
        public string UrlToFile;

        /// <summary>
        /// Location of where file will be saved.
        /// </summary>
        public string SaveTo;

        /// <summary>
        /// File name
        /// </summary>
        public string FileName;

        public Requirement(string urlToFile, string saveTo, string fileName)
        {
            this.UrlToFile = urlToFile;
            this.SaveTo = saveTo;
            this.FileName = fileName;
        }
    }
}
