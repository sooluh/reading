<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?= set_title($page) ?></title>
<link rel="canonical" href="<?= current_url() ?>">
<link rel="shortcut icon" href="https://avatars3.githubusercontent.com/u/20874779" type="image/x-icon" />

<?php include 'meta.php' ?>

<link rel="preconnect" href="https://api.fonts.coollabs.io" />
<link rel="preconnect" href="https://avatars3.githubusercontent.com" />
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />
<link rel="dns-prefetch" href="https://ik.imagekit.io" />

<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/unpoly@3.1.0/unpoly.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/unpoly@3.1.0/unpoly.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-beta3/css/all.min.css">
</noscript>
<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" />

<?php if ($_ENV['UMAMI_SRC'] && $_ENV['UMAMI_ID']) : ?>
	<script async src="<?= $_ENV['UMAMI_SRC'] ?>" data-website-id="<?= $_ENV['UMAMI_ID'] ?>"></script>
<?php endif ?>
