<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;800&family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="data.php">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <img class="google_logo d-i_b" src="https://1000marche.net/wp-content/uploads/2020/03/Google-logo.png" alt="Google logo">
        <a class="header_title d-i_b" href="#">Privacy e termini</a>

        <!-- Header nav -->
        <div>
            <ul class="header_nav">
                <li class="d-i_b"> <a class="d-i_b" href="#">Introduzione</a> </li>
                <li class="d-i_b"> <a class="d-i_b" href="#">Norme sulla privacy</a> </li>
                <li class="d-i_b"> <a class="d-i_b" href="#">Termini di servzio</a> </li>
                <li class="d-i_b"> <a class="d-i_b" href="#">Tecnologie</a> </li>
                <li class="d-i_b"> <a class="d-i_b active" href="#">Domande frequenti</a> </li>
            </ul>
        </div>
    </header>
    <!-- End Header -->



    <!-- Main -->
    <main>
        <div class="container">
            <?php 
            include 'data.php'; 
            foreach($faq_array as $single_faq){
            ?>
                <div class="single_faq">
                    <h2 class="faq_question"> <?php echo $single_faq['question']; ?> </h2>
                    <?php foreach($single_faq['answer'] as $single_answer){ ?>
                        <p class="faq_answer"> <?php echo $single_answer; ?> </p>
                    <?php }; ?>
                </div>
            <?php } ?>
        </div>
    </main>
    <!-- End Main -->

</body>
</html>