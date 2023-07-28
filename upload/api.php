<?php
$token = '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';
$repositoryOwner = 'sh20raj';
$repositoryName = 'cdns20';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $file = $_FILES['file'];

    // Prepare the file data for GitHub API upload
    $content = file_get_contents($file['tmp_name']);
    $base64Content = base64_encode($content);

    // Create the file in the GitHub repository using GitHub API
    $url = "https://api.github.com/repos/{$repositoryOwner}/{$repositoryName}/contents/{$file['name']}";
    $data = [
        'message' => 'Upload file via API',
        'content' => $base64Content,
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\nAuthorization: token {$token}",
            'method'  => 'PUT',
            'content' => json_encode($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Decode the JSON response
    $response = json_decode($result, true);

    // Check if the upload was successful
    if (isset($response['content']['download_url'])) {
        $downloadUrl = $response['content']['download_url'];

        // Return the JSON response with download URL
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'download_url' => $downloadUrl]);
    } else {
        // Return the JSON response with the error message
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'error' => 'File upload failed.']);
    }
}
?>
