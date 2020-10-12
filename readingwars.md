---
title: The Reading Wars
permalink: "/events/readingwars/"
layout: default
---

<h1>The Reading Wars</h1>
<h2>An Exhaustive Guide</h2>

<h3 id="intro">Introduction</h3>
<p>The Reading Wars is a competitive event, a dramatic clash between three teams over the title of Reading Champions. For every 15 minutes of uninterrupted reading you complete, you earn 50 points for your team and a coin with which you can attack the other teams! At the end of the month, whichever team has the most points is the winner!</p>
<p>This event will motivate you to read more, along with creating a fun and competitive environment for you to see who is the victor. The winning team will get special recognition with a permanent role detailing your winning status of the Reading Wars, along with bookmarks.</p>
<p>The event goes for the duration of October every year and is hosted on our Discord. It is a great way to come together with (or against) friends to battle for supremacy.</p>

<h3>Getting Started / Classes</h3>
<p>To begin, you need to join. You can choose a class that will give you certain perks, and the bot will put you on a team that you fight alongside. You can always change your class later if you like. Here's a list of the classes:</p>
<ul>
  <li><b>Knight</b> - Has an increased chance of a successful attack.</li>
  <li><b>Stonemason</b> - Can build walls to take six hits (instead of four).</li>
  <li><b>Thief</b> - Has a chance to steal back a coin when using any move that takes coins.</li>
  <li><b>Joker</b> - Has some aspects of all classes. Slight chance to steal back coin when using b-bomb, a slightly increased chance of a successful attack, can build the walls to take four hits for only one coin (sometimes), and has a chance to get a bonus when trading in coins.</li>
</ul>

<h3 id="reading">Reading</h3>
<p>To use the commands you need coins. One coin can be gotten through 15 minutes of dedicated reading (you <em>must</em> set a timer). Then, log it by using the `b-read` command. You can set a timer for 30 minutes and log two at once, too, by using `b-read 2`. Reading will also give you 50 bonus points.</p>

<h3 id="points">Points</h3>
<p>Points are how you win! The points you earn show on your whole team, and the smarter you are with your coins the more points you can earn! There isn't an individual leaderboard to prevent teams from becoming battles within themselves, but you can always check the team leaderboard by using the `b-leaderboard` command.</p>

<h3 id="basicgplay">Basic Gameplay</h3>
<p>Make sure you have enough coins for each of these moves! Check how much they cost by running `b-help &lt;command&gt;`, for instance `b-help attack`. This will give you some basic info about the command as well as how much it costs. Play however you like, and however your reading schedule allows!</p>
<p>Attacking and defending your team is the main way to earn (or protect) points. Attacking is blocked by walls, although if there are no walls you will earn about 800 points (as long as the attack succeeds. There is a chance an attack will fail even if there are no walls, although you can minimize this by being a knight.) If there are walls, you can bomb the team. This is a much more economic way to break the other team's walls, although it earns no points and has a short cooldown of one minute. After a successful attack, the team has to wait 30 minutes to attack the same team again.</p>
<p>Building can protect you against attacks. Stonemasons have the advantage here, and can build the walls to take 6 hits rather than 4 for the same cost of 2 coins. There is a cooldown of 5 minutes. Be sure your walls are at full health if you're not being attacked!</p>
<p>Trading points in can earn you 100 points per coin, which is less than the potential for an attack but there is no way it can fail. This is a safer way to play but earns you less overall.</p>

<h3 id="advancedgplay">Advanced Gameplay</h3>
<p>Many commands are easily overlooked but when utilized properly grant massive boons to the team. Here are two of the lesser known commands:</p>
<ul>
  <li><b>b-transfer</b> - `b-transfer &lt;user | "team"&gt; &lt;coins&gt;` This command lets you send coins to another user on your team or to your team's stash for whenever anyone needs coins. Use it effectively to give your team members coins when they need them, even if you're offline.</li>
  <li><b>b-withdraw</b> - `b-withdraw &lt;amount of coins&gt;` Will withdraw coins from your team stash. Use sparingly in case others need some in the future!</li>
</ul>
<p>These two commands, along with a strategy the entire team can get behind and ensuring everyone knows the basic commands well, will give your team the upper hand when playing. But make sure you're reading! For all the commands, none of them work without coins.</p>

<h3 id="offenses">Offenses</h3>
<p>Be sure to play within the rules. Keep things fair so that people can enjoy the game, meaning you can enjoy the game. If you break these rules, you may be banned from the event.</p>
<ul>
  <li>Leaving and rejoining to try and join a specific team.</li>
  <li>Spamming read command or using it if you haven't read.</li>
  <li>Being toxic to other teams.</li>
  <li>Trying to harm your team.</li>
</ul>

<h3 id="commandlist">Command List</h3>
<p>Following is a list of all commands, how much they cost to run, and what they do. Note that this list does not include admin commands. If it does not specify a cost, assume there is no cost to run that command.</p>
<ul>
  <li><b>Attack</b> - The will attempt to attack the team you specify. It costs one coin. If the team you target has walls up, the attack will take no points, and even if they have no walls it has a chance of failure. If it succeeds and the enemy team has no walls, you will steal a random amount of points from them. Has a thirty minute cooldown if successful.</li>
  <li><b>Bomb</b> - Does a random amount of damage to the targeted enemy's walls. Costs one coin. It will take no points and but is much more economic for taking out walls than attacks on average. Has a one minute cooldown.</li>
  <li><b>Build</b> - Will build the walls to take four hits (unless you are a stonemason, in which case it will take 6 hits). Costs two coins. Attacks take one hit against the walls, and bombs do a random amount of damage. Has a 5 minute cooldown. For more info about the arguments for each command run `b-help <command name>`</li>
  <li><b>Changeclass</b> - Lets you change your class to a new one. Has a 24 hour cooldown.</li>
  <li><b>Hello</b> - Says hello. Use to check if the bot is online.</li>
  <li><b>Help</b> - Shows a list of commands, or specify a single command for more info.</li>
  <li><b>Info</b> - Gives some basic info about the event. This document is much more detailed, however.</li>
  <li><b>Join</b> - Join the event.</li>
  <li><b>Leaderboard</b> - Show the leaderboard of the teams.</li>
  <li><b>Leave</b> - Leave your team. Note that this is incredibly destructive because it will remove all your points from your team's total.</li>
  <li><b>Listpaused</b> - Admins may pause some commands for maintenence. Use this to see which ones (if any) are paused.</li>
  <li><b>Pingme</b> - Pings you whenever important events happen, like someone bombs you.</li>
  <li><b>Profile</b> - Show detailed stats about yourself or someone else.</li>
  <li><b>Read</b> - Gives you one coin for 15 minutes of reading, and a bonus 50 points.</li>
  <li><b>Teamstats</b> - Show stats about your team, like what your walls states are, cooldowns, and how many coins are in your stash.</li>
  <li><b>Tradein</b> - Directly trade in coins for 100 points per coin.</li>
  <li><b>Transfer</b> - Transfer some of your coins to a teammate or to your team's stash.</li>
  <li><b>Users</b> - Show a list of users on a specific team or in general.</li>
  <li><b>Withdraw</b> - Take coins from your team's stash.</li>
</ul>
