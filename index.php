<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
//make some variables for the questions and answers of the database
//Database Questions
$Question_1 = "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?";
$Question_2 = "How does Google protect my privacy and keep my information secure?";
$Question_3 = "How can I remove information about myself from Google's search results?";
$Question_4 = "Are my search queries sent to websites when I click on Google Search results?";
//Database Answers
$Answer_1 = "<p>The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.</p>

</p>Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information.</p>

<p>If you have a removal request, please fill out this webform. You'll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.</p>

<p>We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it's important to respect the Court's judgment and are working hard to devise a process that complies with the law.</p>

<p>When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.</p>";
$Answer_2 = " <p>We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</p>

<p>We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</p>

<p>You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.</p>

<p>Learn more about how we keep your personal information private and safe — and put you in control.</p>";

$Answer_3 =" <p>Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information.</p>";

$Answer_4 = " <p>In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.</p>";
// end variables
// make an array of the google Database
$faqs = [
  [
    "Questions" => $Question_1,
    "Answers" => $Answer_1
  ],
  [
    "Questions" => $Question_2,
    "Answers" => $Answer_2
  ],
  [
    "Questions" => $Question_3,
    "Answers" => $Answer_3
  ],
  [
    "Questions" => $Question_4,
    "Answers" => $Answer_4
  ],
];
?>
<!-- for ($i=0; $i < count($faqs) ; $i++) {
echo $faqs[$i]["Questions"]. "<hr>" .$faqs[$i]["Answers"]. "<hr>";
}; -->
<html lang="en" dir="ltr">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" href="css/style.css">
   <title>php-google-faq</title>
  </head>
  <body>
   <div class="question-wrapper">
    <?php if(!empty($faqs)): ?>
     <?php foreach ($faqs as $faq): ?>
       <h2><?php echo $faq["Questions"] ?></h2>
       <p><?php echo $faq["Answers"] ?></p>
     <?php endforeach ?>
   <?php endif ?>
   </div>
  </body>
</html>
