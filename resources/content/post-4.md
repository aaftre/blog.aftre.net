---
post_id: 4
view: layout.post
path: /post-4
date: 2016-11-02
posts_section: [ 6, 5, 4, 3, 2, 1 ]
---

# The Path to Solder Reflow

![xlimage](/assets/images/4/1.jpg)

Happy Saturday morning! Let’s turn the TV on for some background noise while doing housework and… nothing. Bummer. Just a black screen staring at me. This situation threw a bit of a wrench into my weekend plans, I’m always looking forward to the new episode of Westworld these days.

I’ve been exposed to an iota of electronics through my Comp Sci schooling career, unfortunately I’ve forgotten slightly more than that. None the less, I’m obliged to take the television apart and see what I can diagnose.

Youtube user [Tampatec](https://www.youtube.com/user/Tampatec)[[1](https://www.youtube.com/watch?v=Z1DEkSguWtg)] put out quite a few videos on troubleshooting televisions.  The first and most obvious was to check the caps on the power supply for any bulges and signs of damage.  The also Fuse passed.  The power supply was fairly simple in its output, not that I understand how all the components are interacting.

All output pins were nicely labelled.  After powering on the TV the power supply would provide all the expected outputs. Both 24VCC pins were high, both 12VCC pins were high. Even PWON went high to 3.3V. But after a few seconds all the voltages would quickly drop to 0. What the hell?

![xlimage](/assets/images/4/2.jpg)

The microcontroller was disconnected isolating the power supply. It was unmounted from the TV, but at this point it wasn’t providing any output at all.  This was because the mounting screws which provide grounding were removed as well. After mounting it back on the TV the 5VCC pins were high again. That’s good news, I guess. The 5VCC pins are supposed to stay high all the time when plugged in. This keeps the microcontroller running so that when it receives a power on signal from the remote IR receiver or power button it puts the PWON pin high. This tells the power supply to turn on the other pins.

With the microcontroller still disconnected it was possible to short pins 5VCC and PWON with a screw driver. Shorting the two pins caused the power supply to come to life and provide the expected power on all of it’s pins.  The pins stayed energized the whole time while the screwdriver was applied. Looks like it’s ruled out.  So what’s going on?

For some reason (*cough* BGA *cough*), the microcontroller was killing the power supply by turning off the PWON pin. So really, what can be done at this point? Order a new one.  Or… maybe bake it?

Evidently a known disadvantage of BGA surface mounted devices is the weakness of the connections;

> A disadvantage of BGAs is that the solder balls cannot flex in the way that longer leads can, so they are not mechanically compliant. As with all surface mount devices, bending due to a difference in coefficient of thermal expansion between PCB substrate and BGA (thermal stress) or flexing and vibration (mechanical stress) can cause the solder joints to fracture. [[wikipedia](https://en.wikipedia.org/wiki/Ball_grid_array#Noncompliant_connections)]


![xlimage](/assets/images/4/3.jpg)

Two of the large surface mounted ICs even have a black coating that looks like it’s designed to absorb heat.  Baking the circuit/allowing the solder to re-flow and re-connect is a known fix[[2](https://www.youtube.com/watch?v=tjWXExWM4RU)]. Although it may be unreliable and temporary.

![xlimage](/assets/images/4/4.jpg)

I unmounted the microcontroller, put it on a piece of cardboard, protected any plastic connectors with tinfoil and preheated the oven to 400 degrees Fahrenheit. Before sliding the cardboard in I also applied a heatgun to the two large ICs. I let it bake for 10 minutes in the oven and again applied the heat gun to the two ICs after taking it out.

After reassembly the TV lit right up beautifully to my surprise and delight.

Let’s see how long it lasts and how long the IC connections stay fused.

And now on to Westworld!…

![xlimage](/assets/images/4/5.jpg)

