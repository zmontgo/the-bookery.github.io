---
title: Events
permalink: "/events/"
layout: default
---

<script>
  // call function with variables timestamp1 and timestamp2 in call
  function timedifference(timestamp1, timestamp2) {
    // redefine the variables
    timestamp1 = new Date(parseInt(timestamp1));
    timestamp2 = new Date(parseInt(timestamp2));

    let difference = timestamp2.getTime() - timestamp1.getTime();

    difference = Math.floor(difference / 1000 / 60); // Minutes

    return difference;
  }
</script>

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
  
  <script>
    var date = document.querySelectorAll(".time");
    date = date[date.length-1];
    date.innerText = "Loading...";
    var startdifference = timedifference(new Date(Date("{{event.begin}}")).getTime(), Date.now());
    var enddifference = timedifference(new Date(Date("{{event.end}}")).getTime(), Date.now());\
    console.log(new Date(Date("{{event.begin}}")).getTime() - Date.now());
  
    if (startdifference > 0) {
      date.innerText = "Event Upcoming";
    } else if (startdifference <= 0 && enddifference > 0) {
      date.innerText = "Event Ongoing";
    } else {
      date.innerText = "Event Over";
    }
  </script>

{% endfor %}
</div>

<p>To take a look at events on a calendar or add them to your Google Calendar, check out our <a href="https://bookerycommunity.com/calendar/">calendar</a>!</p>
