<?php
include '../../conn.php';

//Functions
function extractDriveFileId($url) {
    $fileId = '';

    if (preg_match('/\/file\/d\/([^\/]+)/', $url, $matches)) {
        $fileId = $matches[1];
    } elseif (preg_match('/\/open\?id=([^&]+)/', $url, $matches)) {
        $fileId = $matches[1];
    }

    return $fileId;
}
function extractMediaFireFileId($url) {
    $fileId = '';

    if (preg_match('/\/file\/([^\/]+)/', $url, $matches)) {
        $fileId = $matches[1];
    } elseif (preg_match('/file\/([^\/]+)/', $url, $matches)) {
        $fileId = $matches[1];
    }

    return $fileId;
}

// Example usage:
$url = 'https://www.mediafire.com/file/ABC123/Example_File.txt/file';
$fileId = extractMediaFireFileId($url);
echo $fileId; // Output: ABC123


// Get the video ID from the URL parameter
$id = $_GET['id'];

// Fetch the video information from the database
$sql = "SELECT * FROM videos WHERE id = $id";
$result = $conn->query($sql);

// Check if the video exists
if ($result->num_rows === 0) {
    echo "Video not found";
    exit;
}

// Get the video details
$video = $result->fetch_assoc();
$url = $video['url'];
if(isset($_GET['poster'])){header('Location: '.$video['poster_url'].'');exit();}

 if (strpos($url, 'drive.google.com') !== false) {
        $apikey = ['AIzaSyCt3DULzE2trDJhfFUosWZT-3GEObbMqVU', 'AIzaSyCsbx8BSyLwkw6XX6Lg5OF1U0HNtI9VmCY', 'AIzaSyBLMJAT6oqTZxAMsCsMjXzoo4lkJL4MmfM', 'AIzaSyCIY6fomcJxOt0XQ_naa1rzfd5wlOMGKDY'];
        $driveapikey = $apikey[array_rand($apikey)];
        $url = 'https://www.googleapis.com/drive/v3/files/'.extractDriveFileId($url).'?alt=media&key='.$driveapikey.'';
    } elseif (strpos($url, 'mediafire.com') !== false) {
       $url = 'https://wholly-api.sh20raj.repl.co/websites/mediafire.com/direct_download.php?id='.extractMediaFireFileId($url);
    } elseif (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
       // return 'youtube';
    } elseif (strpos($url, 'vimeo.com') !== false) {
        //return 'vimeo';
    } elseif (strpos($url, 'archive.org') !== false) {
        //return 'archive.org';
    } 

header('Location: '.$url.'');
        exit();



?>