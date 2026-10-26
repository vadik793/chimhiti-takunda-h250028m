<?php
session_start();
$notice = $_SESSION['notice'] ?? '';
unset($_SESSION['notice']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="HIT Snooker & Pool Club — play, compete, and connect.">
  <title>HIT Snooker & Pool Club</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/script.js" defer></script>
</head>
<body>
<header class="site-header">
  <a class="brand" href="#home" aria-label="HIT Snooker and Pool Club home"><span class="brand-mark">HIT</span><span>HIT <b>Snooker & Pool</b><small>CLUB • PLAY • COMPETE</small></span></a>
  <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
  <nav class="nav-links" aria-label="Main navigation">
    <a href="#home">Home</a><a href="#about">About</a><a href="#games">Games</a><a href="#tournaments">Tournaments</a><a href="#membership">Membership</a><a href="#contact" class="nav-cta">Contact</a>
  </nav>
</header>
<main>
<?php if ($notice): ?><div class="notice" role="status"><?= htmlspecialchars($notice, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
<section class="hero" id="home">
  <div class="hero-content">
    <p class="eyebrow"><span></span> YOUR GAME. YOUR COMMUNITY.</p>
    <h1>Make every<br><em>shot</em> count.</h1>
    <p class="hero-copy">Welcome to HIT Snooker & Pool Club — a place to sharpen your skills, challenge your friends, and enjoy the game.</p>
    <div class="hero-actions"><a class="button button-gold" href="#membership">Join the club <span>↗</span></a><a class="button button-outline" href="#games">Explore games</a></div>
    <div class="hero-stats"><div><strong>02</strong><span>cue sports</span></div><div><strong>01</strong><span>club community</span></div><div><strong>∞</strong><span>ways to improve</span></div></div>
  </div>
  <div class="hero-art" role="img" aria-label="Illustration of a green snooker table and cue balls">
    <div class="art-glow"></div><div class="table-frame"><div class="table-felt"><span class="pocket p1"></span><span class="pocket p2"></span><span class="pocket p3"></span><span class="pocket p4"></span><span class="pocket p5"></span><span class="pocket p6"></span><div class="table-line"></div><div class="baulk-arc"></div><div class="ball ball-white"></div><div class="ball ball-red"></div><div class="ball ball-yellow"></div><div class="ball ball-blue"></div><div class="ball ball-pink"></div><div class="ball ball-black"></div><div class="cue"></div></div></div><div class="art-label"><span class="live-dot"></span> THE TABLE IS YOURS <span>01 / 02</span></div>
  </div>
  <a class="scroll-cue" href="#about">SCROLL TO EXPLORE ↓</a>
</section>
<section class="section intro-section" id="about">
  <div class="section-kicker">01 / ABOUT THE CLUB</div><div class="intro-grid"><h2>More than a game.<br><span>A place to belong.</span></h2><div><p class="lead">Great games bring people together.</p><p>HIT Snooker & Pool Club is a proposed student project for a welcoming cue-sports community. Whether you are picking up a cue for the first time or preparing for a competition, our goal is to make every visit enjoyable, fair, and focused on improvement.</p><a class="text-link" href="#membership">Become a member <span>→</span></a></div></div>
  <div class="feature-grid"><article class="feature-card"><span class="feature-number">01</span><div class="feature-icon">◎</div><h3>Build your skills</h3><p>Practise aiming, positioning, safety shots, and tactical thinking.</p></article><article class="feature-card"><span class="feature-number">02</span><div class="feature-icon">♧</div><h3>Find your people</h3><p>Meet fellow players, enjoy friendly matches, and grow a club community.</p></article><article class="feature-card"><span class="feature-number">03</span><div class="feature-icon">♜</div><h3>Play to compete</h3><p>Take part in organised events designed around sportsmanship and fair play.</p></article></div>
</section>
<section class="section games-section" id="games">
  <div class="section-kicker">02 / CHOOSE YOUR GAME</div><div class="section-heading"><h2>Two games.<br><span>Endless strategy.</span></h2><p>Different tables, different tactics — one shared love of cue sports.</p></div>
  <div class="game-grid">
    <article class="game-card snooker-card"><div class="game-visual snooker-visual"><div class="mini-table"><i class="mini-ball white"></i><i class="mini-ball red"></i><i class="mini-ball yellow"></i><i class="mini-ball blue"></i><i class="mini-ball pink"></i><i class="mini-ball black"></i></div><span class="visual-tag">PRECISION / PATIENCE</span></div><div class="game-copy"><div class="game-index">GAME 01</div><h3>Snooker</h3><p>A tactical game played with 15 reds, six colours, and the cue ball. Score points by potting balls in the correct sequence.</p><ul><li>Focus on cue-ball control</li><li>Plan several shots ahead</li><li>Master safety play</li></ul><a href="#contact" class="text-link">Ask about snooker <span>→</span></a></div></article>
    <article class="game-card pool-card"><div class="game-visual pool-visual"><div class="pool-rack"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div><span class="visual-tag">PACE / CONTROL</span></div><div class="game-copy"><div class="game-index">GAME 02</div><h3>Pool</h3><p>A lively family of cue sports. In eight-ball, players clear their group before legally potting the eight ball.</p><ul><li>Develop reliable break shots</li><li>Control angles and position</li><li>Play with confidence</li></ul><a href="#contact" class="text-link">Ask about pool <span>→</span></a></div></article>
  </div>
</section>
<section class="tournament-section" id="tournaments"><div class="tournament-inner"><div><div class="section-kicker">03 / CLUB EVENTS</div><h2>Ready for a<br><span>friendly challenge?</span></h2><p>Use this section to announce club competitions, practice nights, ladders, and match results. Event dates below are examples and should be updated by the club administrator.</p><a href="#contact" class="button button-gold">Enquire about events ↗</a></div><div class="event-list"><article class="event-row"><div class="event-date"><strong>01</strong><span>EVENT</span></div><div><span class="event-type">SNOOKER • FRIENDLY</span><h3>Club Practice Session</h3><p>Open practice and skill-building</p></div><span class="event-arrow">↗</span></article><article class="event-row"><div class="event-date"><strong>02</strong><span>EVENT</span></div><div><span class="event-type">POOL • SOCIAL</span><h3>Eight-Ball Challenge</h3><p>Friendly matches for all levels</p></div><span class="event-arrow">↗</span></article><article class="event-row"><div class="event-date"><strong>03</strong><span>EVENT</span></div><div><span class="event-type">ALL PLAYERS</span><h3>New Members' Meet-up</h3><p>Meet players and learn the basics</p></div><span class="event-arrow">↗</span></article><p class="small-note">Sample event listings — no dates or bookings are confirmed.</p></div></div></section>
<section class="section membership-section" id="membership"><div class="section-kicker">04 / JOIN THE CLUB</div><div class="membership-grid"><div><h2>Take your place<br><span>at the table.</span></h2><p class="lead">Good games start with good company.</p><p>Send a membership enquiry and the club team can follow up with details about joining, practice sessions, and upcoming events.</p><div class="member-perks"><div>✓ <span>Welcoming atmosphere for beginners</span></div><div>✓ <span>Opportunities to practise and compete</span></div><div>✓ <span>Connect with fellow cue-sports fans</span></div></div></div><form class="club-form" action="register.php" method="post" id="membership-form"><h3>Membership enquiry</h3><p>Fields marked * are required.</p><label for="full_name">Full name *</label><input id="full_name" name="full_name" required maxlength="100" autocomplete="name" placeholder="Enter your name"><label for="email">Email address *</label><input id="email" name="email" type="email" required maxlength="150" autocomplete="email" placeholder="you@example.com"><label for="phone">Phone number</label><input id="phone" name="phone" maxlength="30" autocomplete="tel" placeholder="Your contact number"><label for="game">Preferred game *</label><select id="game" name="game" required><option value="">Choose a game</option><option>Snooker</option><option>Pool</option><option>Both</option></select><label for="message">Tell us a little about yourself</label><textarea id="message" name="message" rows="3" maxlength="1000" placeholder="New to the game, or an experienced player?"></textarea><label class="check-label"><input type="checkbox" name="consent" required> I agree to be contacted about this enquiry. *</label><button class="button button-gold form-submit" type="submit">Send enquiry <span>↗</span></button><p class="form-note">Demo project: configure PHP and MySQL before using this form for real enquiries.</p></form></div></section>
<section class="contact-strip" id="contact"><div><div class="section-kicker">05 / GET IN TOUCH</div><h2>Let's talk cue sports.</h2><p>Questions about membership, games, or events? Send an enquiry using the form above.</p></div><a class="button button-outline" href="#membership">Contact the club ↑</a></section>
</main>
<footer class="site-footer"><a class="brand" href="#home"><span class="brand-mark">HIT</span><span>HIT <b>Snooker & Pool</b><small>CLUB • PLAY • COMPETE</small></span></a><p>© <?= date('Y') ?> HIT Snooker & Pool Club. Student web development project.</p><a href="#home">Back to top ↑</a></footer>
</body></html>
