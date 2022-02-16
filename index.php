<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$questions = [
    [
        "qestion" => "<h1> How does Google protect my privacy and keep my information secure?</h1>",
        "answer" => "<div><p>We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</p>

        <p>We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</p>
        
        <p>You can learn more about safety and security online, including how to protect yourself and your family online, at the <span>Google Safety Center </span>.</p>
        
        <p><span> Learn more </span> about how we keep your personal information private and safe — and put you in control.</p></div>",
    ],
    [
        "qestion" => "<h1>Why is my account associated with a country?</h1>",
        "answer" =>"<div><p>Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:</p>
        <ol>
            <li>The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
                <ol>
                    <li>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland</li>
                    <li>Google LLC, based in the United States, for the rest of the world</li>
                </ol>
            </li>
            <li>The version of the terms that govern our relationship, which can vary depending on local laws</li>
        </ol>
        <p>Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.</p>

        </div>",
    ],
    [
        "qestion" => "<h1> Determining the country associated with your account</h1>",
        "answer" => "<div><p>When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.</p>

        <p>Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.</p>
        <p>If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. <span> Contact us </span> if you think your country association is wrong.</p>
        
       </div>",
    ],
    [
        "qestion" => "<h1> How can I remove information about myself from Google's search results?</h1>",
        "answer" => "<div><p>Google search results are a reflection of the content publicly available on the web. Search engines can’t remove content directly from websites, so removing search results from Google wouldn’t remove the content from the web. If you want to remove something from the web, <span> you should contact the webmaster </span> of the site the content is posted on and ask him or her to make a change. Once the content has been removed and Google has noted the update, the information will no longer appear in Google’s search results. If you have an urgent removal request, you can also <span>visit our help page for more information</span>.</p>
       </div>",
    ],
    [
        "qestion" => "<h1>Are my search queries sent to websites when I click on Google Search results?</h1>",
        "answer" => "<div><p>In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.</p>
       </div>",
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex flex-column fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="google-logo.png" alt="" width="70" height="40" class="d-inline-block align-text-top">
            <span>Privacy & Terms</span> 
            </a>
        </div>
        <div class="container-fluid border-bottom border-secondary">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Overview</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Terms of Service</a>
                </li>
                <li class="nav-item">
                <a class="nav-link">Technologies</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary font-weight-bold border-bottom border-primary border-5">FAQ</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- main -->
    <div class="container">
        <div class="row">
        <?php foreach ($questions as $data => $element){
        foreach ($element as $question){
            echo $question;  
        }
        }?>
        </div>
    </div>
</body>
</html>