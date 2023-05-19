<?php

$acceptedWords = ["ab", "bb", "aba", "abaa", "bbaa"]; //Kata yang diterima

// Check jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mendapatkan kata dari form 
    $word = $_POST['word'];

    // Check jika kata yang diinput diterima atau tidak
    if (in_array($word, $acceptedWords)) {
        $message = "Accepted";
    } else {
        $message = "Not accepted";
    }
} else {
    // Jika form tidak diisi maka kirim pesan input a message!!
    $message = "input a message";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>TUGAS AUTOMATA</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 style="text-align: center;">Tugas Automata // Timothy Boediman - 211011060044</h1>
    <br>
    <br>
    <p style="text-align:center;"><b><i>This is a php program with input a word and output "accepted" or "not accepted"
    accepting accepted words and not accepting other words.</i></b></p>
    <p style="text-align:center;"><b>The following NFA accepting language (a + b) b a*.</b></p>
    <form method="POST" action="Words.php" style="text-align:center;">
        <label for="word">Enter a word:</label>
        <input type="text" name="word" id="word" required>
        <button type="submit">Check</button>
    </form>
    <div class="automata">
        <p style="text-align:center;"><?php echo $message; ?></p>
        <img src="./img/Automata.png" alt="">
    </div>
</body>
</html>
