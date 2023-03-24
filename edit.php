<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="css/form.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="./index.php"><i class="fa-solid fa-arrow-right fa-rotate-180" style="color: #ffffff;"></i></a>
    </header>
    <main>
        <h1>Kies uw beleg.</h1>
        <form action="./code.php" method="POST">
            <label for="naam">Naam: </label>
            <input type="text" name="naam" id="naam">
            <label for="beleg">Beleg: </label>
            <input type="text" name="beleg" id="beleg">
            <input type="submit">
        </form>
    </main>
</body>
</html>
