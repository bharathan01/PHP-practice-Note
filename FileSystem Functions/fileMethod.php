<?php 
//check the file is exisit
$file = 'fileMethodsNote.txt';
if(file_exists($file)){
    //if file is exists then open the file
    echo readfile('fileMethodsNote.txt');

    //read the file into an array format
        // echo file('fileName.txt');
    //copy file 
       // copy($file,"redme.txt");
    //rename file
       // rename($file,"newName.txt");
    //get the path of file
       echo realpath($file);  
    //file size
      echo filesize($file);
    //file type
       echo filetype($file);
    // write data into file but it remove the exsisting content
      // file_put_contents($file,"file_put_content() methode - to add content to file");
    // detete file
    //  unlink($file);  
    // Remove content from the file (truncate)
       //file_put_contents($fileName, '');


}else{
    echo "file not found..";   
}
//create a folder
// mkdir('newFolder');

