---
title: Events
permalink: "/events/"
layout: default
---

<h1>Upcoming Events</h1>

<div class="cardholder">
  
{% for event in site.data.events %}
  
  <div class="card">
    <span class="time"></span>
    <h1>{{event.title}}</h1>
    <span>{{event.begin}} - {{event.end}}</span>
    <hr>
    <p>{{event.description}}</p>
  </div>

{% endfor %}
</div>

<p>To take a look at events on a calendar or add them to your Google Calendar, check out our <a href="https://bookerycommunity.com/calendar/">calendar</a>!</p>
