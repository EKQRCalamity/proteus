<?php
function head_from_info($title, $description, $components=true) : void {
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <meta name="title" content="<?php echo $title; ?>" />
  <meta name="description" content="<?php echo $description; ?>" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://proteus.lol/" />
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:image" content="https://proteus.lol/assets/embed/banner.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://proteus.lol/" />
  <meta property="twitter:title" content="<?php echo $title; ?>" />
  <meta property="twitter:description" content="<?php echo $description; ?>" />
  <meta property="twitter:image" content="https://proteus.lol/assets/embed/banner.png" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script src="/assets/js/themeSwitcher.js"></script>

  <link rel="stylesheet" href="/assets/css/general.css" />
  <?php
  if ($components)
    {
  ?>
  <link rel="stylesheet" href="/assets/css/components.css" />
  <?php
  }
  ?>
</head>
<?php
}
?>
