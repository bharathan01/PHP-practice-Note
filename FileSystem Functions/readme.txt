PHP provides a variety of filesystem functions that allow you to interact with the filesystem. 
These functions enable you to perform tasks such as reading and writing files, creating directories, 
checking file existence, and more. Here are some commonly used filesystem functions in PHP:

File and Directory Manipulation:
Filesystem Functions:

readFile() - to read the content in file
file_get_contents: Reads entire file into a string.
file_put_contents: Writes a string to a file.
file: Reads entire file into an array.

File and Directory Information:

is_file: Tells whether the filename is a regular file.
is_dir: Tells whether the filename is a directory.
file_exists: Checks whether a file or directory exists.
File and Directory Handling:

fopen: Opens file or URL.
fclose: Closes an open file pointer.
fgets: Gets a line from file pointer.
Directory Functions:

opendir: Opens directory handle.
readdir: Reads entry from directory handle.
closedir: Closes directory handle.
scandir: Returns an array of files and directories in a directory.
Filesystem Path Functions:

realpath: Returns canonicalized absolute pathname.
dirname: Returns a parent directory's path.
basename: Returns the filename component of a path.
pathinfo: Returns information about a file path.