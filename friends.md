---
layout: page
title: Our Friends
permalink: /friends/
---

We have lots of communities we enjoy who we've decided to be friends with! If you're interested in joining any of them, check them out!

Want to join this list? Apply [here](/apply.html)!

<h2 style="color: aqua">Discord Servers</h2>

{% for friend in site.data.friends %}

{% if friend.type == "discord" %}

### {{ friend.name }}

{{ friend.description }}

<a href="{{ friend.link }}" style="text-decoration: underline;">Check them out on Discord!</a>

{% endif %}

{% endfor %}

<h2 style="color: aqua">Habitica Guilds</h2>

{% for friend in site.data.friends %}

{% if friend.type == "habitica" %}

### {{ friend.name }}

{{ friend.description }}

<a href="{{ friend.link }}" style="text-decoration: underline;">Check out their guild!</a>

{% endif %}

{% endfor %}