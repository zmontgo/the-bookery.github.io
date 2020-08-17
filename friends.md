---
title: Our Friends
permalink: "/friends/"
layout: page
---

We have lots of communities we enjoy who we've decided to be friends with! If you're interested in joining any of them, check them out!

Want to join this list? Apply [here](/apply/)!

<h2 style="color: #CA3721; font-family: Courier Prime">Discord Servers</h2>

{% for friend in site.data.friends %}

{% if friend.type == "discord" %}

<h3 style='font-family: Courier Prime'>{{ friend.name }}</h3>

{{ friend.description }}

<a href="{{ friend.link }}" style="text-decoration: underline; color: #6d99ff;">Check them out on Discord!</a>

{% endif %}

{% endfor %}

<h2 style="color: #CA3721; font-family: Courier Prime">Habitica Guilds</h2>

{% for friend in site.data.friends %}

{% if friend.type == "habitica" %}

<h3 style='font-family: Courier Prime'>{{ friend.name }}</h3>

{{ friend.description }}

<a href="{{ friend.link }}" style="text-decoration: underline; color: #6d99ff">Check out their guild!</a>

{% endif %}

{% endfor %}