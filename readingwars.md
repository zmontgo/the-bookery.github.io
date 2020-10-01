---
title: The Reading Wars
permalink: "/events/readingwars/"
layout: default
---

<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>


<h1>The Reading Wars</h1>
<h2>An Exhaustive Guide</h2>

<button class="accordion">Introduction</button>
<div class="panel">
  <p>The Reading Wars is a competitive event, a dramatic clash between three teams over the title of Reading Champions. For ever 15 minutes of uninterrupted reading you complete, you earn 50 points for your team and a coin with which you can attack the other teams! At the end of the month, whichever team has the most points is the winner!</p>
  <p>This event will motivate you to read more, along with create a fun and competitive environment for you to see who is the victor. The winning team will get special recognition with a permanent role detailing your winning status of the Reading Wars, along with bookmarks.</p>
  <p>The event goes for the duration of October ever year, and is a great way to come together with (or against) friends to battle for supremacy.</p>
</div>



<button class="accordion">Getting Started / Classes</button>
<div class="panel">
  <p>To begin, you need to join. You can choose a class which will give you certain perks, and the bot will put you on a team that you fight alongside. You can always change your class later if you like. Here's a list of the classes:</p>
  <ul>
  <li><b>Knight</b> Has an increased chance of a successful attack.</li>
<li><b>Stonemason</b> Can build walls to take six hits (instead of four).</li>
<li><b>Thief</b> Has a chance to steal back a coin when using any move that takes coins.</li>
<li><b>Joker</b> Has some aspects of all classes. Slight chance to steal back coin when using b-bomb, a slightly increased chance of a successful attack, can build the walls to take four hits for only one coin (sometimes) and has a chance to get a bonus when trading in coins.</li>
</ul>
</div>

<button class="accordion">Reading</button>
<div class="panel">
  <p>To do the commands you need coins. One coin can be gotten through 15 minutes of dedicated reading (you <em>must</em> set a timer). Then, log it by using the `b-read` command. You can set a timer for 30 minutes and log two at once, too, by using `b-read 2`. Reading will also give you 50 bonus points.</p>
</div>

<button class="accordion">Points</button>
<div class="panel">
  <p>Points are how you win! The points you earn show on your whole team, and the smarter you are with your coins the more points you can earn! There isn't an individual leaderboard to prevent teams from becoming battles within themselves, but you can always check the team leaderboard by using the `b-leaderboard` command.</p>
</div>

<button class="accordion">Basic Gameplay</button>
<div class="panel">
  <p>Make sure you have enough coins for each of these moves! Check how much they cost by running `b-help &lt;command&gt;`, for instance `b-help attack`. This will give you some basic info about the command as well as how much it costs. Play however you like, and however your reading schedule allows!</p>
 <p>Attacking and defending your team is the main way to earn (or protect) points. Attacking is blocked by walls, although if there are no walls you will earn about 800 points (as long as the attack succeeds. There is a chance an attack will fail even if there are no walls, although you can minimize this by being a knight.) If there are walls, you can bomb the team. This is a much more economic way to break the other team's walls, although it earns no points and has a short cooldown of one minute.</p>
 <p>Building can protect you against attacks. Stonemasons have the advantage here, and can build the walls to take 6 hits rather than 4 for the same cost of 2 coins. There is a cooldown of 5 minutes. Be sure your walls are at full health if you're not being attacked!</p>
 <p>Trading points in can earn you 100 points per coin, which is less than the potential for attack but there is no way it can fail. This is a safer way to play, but earns you less overall.</p>
</div>

<button class="accordion">Advanced Gameplay</button>
<div class="panel">
  <p>Many commands are easily overlooked but when utilized properly grant massive boons to the team. Here is a list:</p>
  <ul>
    <li><b>b-transfer</b> `b-transfer &lt;user | "team"&gt; &lt;coins&gt;` This command lets you send coins to another user on your team or to your team's stash for whenever anyone needs coins. Use it effectively to give your team members coins when they need them, even if you're offline.</li>
    <li><b>b-withdraw</b> `b-withdraw &lt;amount of coins&gt;` Will withdraw coins from your team stash. Use sparingly in case others need some in the future!</li>
  </ul>
  <p>These two commands, along with a strategy the entire team can get behind and ensuring everyone knows the basic commands well, will give your team the upper hand when playing. But make sure you're reading! For all the commands, none of them work without coins.</p>
</div>

<button class="accordion">Offences</button>
<div class="panel">
  <p>Be sure to play within the rules. Keep things fair so that people can enjoy the game, meaning you can enjoy the game. If you break these rules, you may be banned from the event.</p>
  <ul>
    <li>Leaving and rejoining to try and join a specific team.</li>
    <li>Spamming read command or using it if you haven't actually read.</li>
    <li>Being toxic towards other teams.</li>
    <li>Trying to harm your own team.</li>
  </ul>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
