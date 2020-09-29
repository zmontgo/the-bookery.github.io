---
title: Events
permalink: "/events/"
layout: default
---

<h1>Upcoming Events</h1>

<div class="cardholder">
  
{% for event in site.data.events %}

  <div class="card">
    <h1>{{event.title}}</h1>
    <span>{{event.begin}} - {{event.end}}</span>
    <hr>
    <p>{{event.description}}</p>
  </div>

{% endfor %}

</div>
