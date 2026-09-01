<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunar Lander</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        canvas {
            display: block;
            width: 100vw;
            height: 100vh;
            background-color:black;
        }

        @font-face {
            font-family: 'bender_light';
            src: url('/assets/images/lander/bender_light-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .message {
            font-family: 'bender_light';
            width: 600px;
            height: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
            border: 1px solid gray;
            padding:2px;
            background-color: lightgray;
        }

        .hidden {
            display:none;
        }

        .message_title {
            font-weight:bold;
            font-size: 25px;
            text-align:left;
            padding-left:20px;
            background-color:darkgray;
            height: 30px;
            width: 100%;
        }

        .message_body {
            font-size:20px;
            height:260px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fuel_guage {
            opacity: 25%;
            position: absolute;
            bottom: 0;
            left: 0;
            height: 100vh;
            background-color:white;
            width: 5px;
        }
    </style>
</head>
<body>
    <audio id="thrust" preload="auto">
        <source type="audio/mpeg" src="data:audio/mp3;base64,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qsa+Ne7OtrVLCJQ5Bemtxbak+hWl738bn7Tr8P5duGSnED61DTIucd4/NK7I/ImHiUNMrrLahHXVi+SmUtzqIUjbod8yntT7iHSvXuRDchl5bdaG5hjPJyEmrlA6T1CUiZbclQEnJbbt+ABAL9prDhF9t1lbksDfhqiWqiL9TMYfiVBUSCMWUeKWpqTJ5CMsCgrMxWJXH5F0QXNiUv/jKMTqLBwK0b7DBn2R+NtIDJpXHo5e06BtFkXmIxhVKSs1YSilJ9dbFP7ptSUhR90p0ezpdCjDolKxlJxZenw6Oxb6ZLPJvHzGnvmlxX3e3aYOdqec+/Tc0r/GzHqaW8O/3/Gwok+P2Ry377V7NM1M0xvppubvKh233/Lfr5pPYMbaESQINgEY3bZbt+AApf/jOMS8LLv62b7CTFFwNJnXAmyHmS9Tze6JUhTEorWw+t/aHAdoc/eBWnJeuCqrnbhaREpNEkWpKnOXlO1pYdZiRpS9k51U5x+aw1lMmsNWrkaw1lpNtSMBpGFKk3SP+GthrLB1pUmscTyk1hkssNY5K1RtnLalVawmsMmqEYWOQFZDVqRqxVQzoatDVqhk0cmWOTNSZY6mzkaykbLDIMDI2BolKiQmWmAHpTABqRzmD2IY/OJjQbBcbmGy0ZGYJkN+GPpmZEqJlqMGsU6ZcBA8eiIajwTQ0f/jOMTUKORG3l55hpEGyQNYRhypxpE0RjQdMe4EbhTcCUGSiCiEh0OwiNEbAxCKQhRQBBpIP+nMFBwukIqRFOFGACKgo3MvcBDwS8IpxSUKMGCOXQYmsEFBwqsMOjDIgOBoKYjhpzAxINsMdGMiCAJGgovd0E9RUhAkgOMASrYhD7hIYiExAkgOMARvWI0+IMhS2RdT9WQyNrkDzkRbk1V63gfd+Huf2VXa0qm6LLtLWu1pVXxwizuuEzFhTCm5v5L5pcqNwwEdIOmQbVI48kZSjcKBHTDpkP/jaMT7anRt/XTmcFRtUjj0DDUBQiKOoHUDIU5GvwUpiFwCBY64dcKnQSK7dx4U0hQZCYhIg2pg1+MOClUIhkJiEiDalDO38dFNIUCQkJRI7sod+KTb7MxY00ZubsQ/JrVNAMGSSPzFPe7TRGSTE3MS+TQ9KY9HYBmLfYda0wFZSiqbq8HLikpcJeKiybqSqwDlyyMsOSpFQDhRwaOi53YgFW4vKIzDixxYoJL9lkBsCQmipBxI4cUAoGyyTEFNRTMuMTAwqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqg==">
    </audio>

    <div id="hud_message_start" class="message">
        <div class="message_title">Start!</div>
        <div class="message_body">
            Press [s] to start!<br><br>
            [a], [d], [w] are rotate left, rotate right, thrust respectively.
        </div>
    </div>

    <div id="hud_message_crashed" class="message hidden">
        <div class="message_title">Destroyed</div>
        <div class="message_body">
            You created a 2KM wide crater!<br><br>
            Lander angle or horizontal or vertical speed was too great.
        </div>
    </div>

    <div id="hud_message_marooned" class="message hidden">
        <div class="message_title">Hard Landing</div>
        <div class="message_body">
            You are hopelessly marooned.<br><br>
            Horizontal or vertical speed too great.
        </div>
    </div>

    <div id="hud_message_landed" class="message hidden">
        <div class="message_title">Landed!</div>
        <div class="message_body">
            Perfect Landing!
        </div>
    </div>

    <div class="fuel_guage"></div>
    <canvas id="canvas"></canvas>

    <script>
        window.addEventListener('resize', () => {
            resize_canvas();
            draw_background();
        });

        window.addEventListener('keydown', e => {
            // console.log(lander.fuel, lander.angle, lander.y_acc, lander.x_pos, lander.y_pos);
            if (e.key === 'w') lander.set_thrusting(true);
            if (e.key === 'a') lander.set_rotate_left(true);
            if (e.key === 'd') lander.set_rotate_right(true);
        });
        window.addEventListener('keyup', e => {
            if (e.key === 'w') lander.set_thrusting(false);
            if (e.key === 'a') lander.set_rotate_left(false);
            if (e.key === 'd') lander.set_rotate_right(false);
            if (e.key === 's') {
                if (game_over) {
                    document.querySelectorAll('.message').forEach(el => {
                        el.classList.add('hidden');
                    });

                    game_over = false;
                    lander = new Lander;
                    requestAnimationFrame(game_loop);
                }
            }
        });

        function draw_background() {
            if (image.complete && image.naturalWidth > 0)
                ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
        }

        function getRandomIntInclusive(min, max) {
            const minCeiled = Math.ceil(min);
            const maxFloored = Math.floor(max);
            // The maximum is inclusive and the minimum is inclusive
            return Math.floor(Math.random() * (maxFloored - minCeiled + 1) + minCeiled);
        }

        function gen_terrain() {
            let terrain = [];

            const max_y = Math.floor(canvas.height / 5);
            const start_y = canvas.height - getRandomIntInclusive(1, max_y);
            const pad_len = 100;
            const pad_start = getRandomIntInclusive(0, canvas.width - pad_len);

            for (x = 0; x < canvas.width; x++) {
                do {
                    y = getRandomIntInclusive(-10, 10);

                    if (terrain.length)
                        y = terrain[x-1].y + y;
                    else
                        y = start_y + y;
                } while (y > canvas.height)

                terrain.push({x: x, y: y});

                if (x == pad_start) {
                    for (xi = 0; xi < pad_len; xi++)
                        terrain.push({x: xi + x, y: y});

                    x += pad_len;
                }
            }

            return { terrain, pad_len, pad_start };
        }

        function draw_terrain() {
            let { terrain, pad_len, pad_start } = terrain_data;

            ctx.beginPath();
            ctx.moveTo(terrain[0].x, terrain[0].y);

            for (let i = 1; i < terrain.length; i++)
                ctx.lineTo(terrain[i].x, terrain[i].y);

            ctx.strokeStyle = '#FFF';
            ctx.lineWidth   = 1;
            ctx.stroke();

            // Landing pad highlight
            ctx.beginPath();
            ctx.moveTo(terrain[pad_start].x, terrain[pad_start].y +3);
            ctx.lineTo(terrain[pad_start+pad_len].x, terrain[pad_start+pad_len].y +3);
            ctx.strokeStyle = '#00FF00';
            ctx.lineWidth = 5;
            ctx.stroke();
        }

        function draw_hud() {
            ctx.font = "bold 20px bender_light";
            ctx.fillStyle = "#FFFFFF";
            ctx.fillText("Fuel",      10 +25, 20 +25);
            ctx.fillText(lander.fuel, 10 +25 +200, 20 +25);
            ctx.fillText("Angle", 10 +25, 45 +25);
            ctx.fillText(lander.angle, 10 +25 +200, 45 +25);
            ctx.fillText("Horizontal Speed", 10 +25, 70 +25);
            ctx.fillText(Math.floor(lander.x_acc *100), 10 +25 +200, 70 +25);
            ctx.fillText("Vertical Speed", 10 +25, 95 +25);
            ctx.fillText(Math.floor(lander.y_acc *100), 10 +25 +200, 95 +25);

            if (lander.landed) {
                document.getElementById('hud_message_landed').classList.remove('hidden');
            } else if (lander.crashed) {
                document.getElementById('hud_message_crashed').classList.remove('hidden');
            } else if (lander.marooned) {
                document.getElementById('hud_message_marooned').classList.remove('hidden');
            }

            hud_fuel_guage.style.height = lander.fuel / 10 +"vh";
        }

        class Lander {
            crashed = false;
            marooned = false;
            landed = false;
            thrusting = false;
            rotating_left = false;
            rotating_right = false;
            angle = 0;
            rotation_rate = 1;
            gravity_rate = 0.009;
            thrust_rate = 0.025;
            x_pos = 0;
            y_pos = 0;
            x_acc = 0;
            y_acc = 0;
            fuel_burn_rate = 1;
            fuel = 1000;
            glyph_scale = 0.4;
            glyph_width = 0;
            lander_path_thrust_animation_n = 0;
            thrust_anim_tick = 0;
            thrust_anim_rate = 6;

            constructor () {
                this.lander_svgs = [
                    "m 56.881392,0.27682291 -22.235817,0.0716883 -11.872193,9.63427429 0.0187,22.5849085 11.398428,9.303885 21.980235,-0.0062 0.218182,-0.180779 11.68518,-9.643625 0.0187,-22.4134802 z M 56.30477,1.8757821 66.493849,10.372395 66.47821,31.289774 55.597184,40.269503 34.760845,40.275727 24.38787,31.810283 24.369167,10.743295 35.212789,1.9443438 Z m -22.927765,46.0550099 -8.611939,17.794266 1.436882,0.695064 8.611938,-17.794265 z m -15.506475,-7.689341 0.06546,8.83947 8.537132,0.01245 46.478907,0.06233 -0.06546,-8.83947 -0.791687,-0.0032 z m 1.608309,1.595843 51.824355,0.07169 0.04052,5.650901 -44.867479,-0.06233 -6.956875,-0.0094 z m 55.776558,31.249833 -0.0032,1.595842 15.247775,0.0187 V 73.10583 Z M 64.601903,47.612872 63.292813,48.529233 81.383182,74.34323 82.689154,73.426867 Z M 15.320922,73.080893 0.07314787,73.096533 0.07626471,74.692375 15.324039,74.676736 Z M 25.522469,47.908974 7.8840478,73.42375 9.196254,74.330762 26.834674,48.815987 Z m 38.428007,17.822317 v 6.78233 h 1.595842 v -6.78233 z m -39.176058,-0.03428 v 6.78233 h 1.595842 v -6.78233 z m 0.729349,-0.342857 v 1.595843 h 40.036318 v -1.595843 z m 31.427495,-17.772447 -1.43688,0.695065 8.611937,17.794265 1.436882,-0.695064 z",
                    "m 26.787109,65.558594 -1.564453,0.3125 20.392578,22.96289 1.410157,-0.28125 0.158203,0.0274 L 64.957031,65.898437 63.384766,65.625 46.322266,87.131115 Z M 56.881392,0.27682291 34.645575,0.34851118 22.773382,9.9827855 l 0.0187,22.5849085 11.398428,9.303885 21.980235,-0.0062 0.218182,-0.180779 11.68518,-9.643625 0.0187,-22.4134802 z M 56.30477,1.8757821 66.493849,10.372395 66.47821,31.289774 55.597184,40.269503 34.760845,40.275727 24.38787,31.810283 24.369167,10.743295 35.212789,1.9443438 Z m -22.927765,46.0550099 -8.611939,17.794266 1.436882,0.695064 8.611938,-17.794265 z m -15.506475,-7.689341 0.06546,8.83947 8.537132,0.01245 46.478907,0.06233 -0.06546,-8.83947 -0.791687,-0.0032 z m 1.608309,1.595843 51.824355,0.07169 0.04052,5.650901 -44.867479,-0.06233 -6.956875,-0.0094 z m 55.776558,31.249833 -0.0032,1.595842 15.247775,0.0187 V 73.10583 Z M 64.601903,47.612872 63.292813,48.529233 81.383182,74.34323 82.689154,73.426867 Z M 15.320922,73.080893 0.07314787,73.096533 0.07626471,74.692375 15.324039,74.676736 Z M 25.522469,47.908974 7.8840478,73.42375 9.196254,74.330762 26.834674,48.815987 Z m 38.428007,17.822317 v 6.78233 h 1.595842 v -6.78233 z m -39.176058,-0.03428 v 6.78233 h 1.595842 v -6.78233 z m 0.729349,-0.342857 v 1.595843 h 40.036318 v -1.595843 z m 31.427495,-17.772447 -1.43688,0.695065 8.611937,17.794265 1.436882,-0.695064 z",
                    "m 26.787109,65.558594 -1.564453,0.3125 20.392578,44.129556 1.410157,-0.28125 0.158203,0.0274 L 64.957031,65.898437 63.384766,65.625 46.322266,107.37174 Z M 56.881392,0.27682291 34.645575,0.34851118 22.773382,9.9827855 l 0.0187,22.5849085 11.398428,9.303885 21.980235,-0.0062 0.218182,-0.180779 11.68518,-9.643625 0.0187,-22.4134802 z M 56.30477,1.8757821 66.493849,10.372395 66.47821,31.289774 55.597184,40.269503 34.760845,40.275727 24.38787,31.810283 24.369167,10.743295 35.212789,1.9443438 Z m -22.927765,46.0550099 -8.611939,17.794266 1.436882,0.695064 8.611938,-17.794265 z m -15.506475,-7.689341 0.06546,8.83947 8.537132,0.01245 46.478907,0.06233 -0.06546,-8.83947 -0.791687,-0.0032 z m 1.608309,1.595843 51.824355,0.07169 0.04052,5.650901 -44.867479,-0.06233 -6.956875,-0.0094 z m 55.776558,31.249833 -0.0032,1.595842 15.247775,0.0187 V 73.10583 Z M 64.601903,47.612872 63.292813,48.529233 81.383182,74.34323 82.689154,73.426867 Z M 15.320922,73.080893 0.07314787,73.096533 0.07626471,74.692375 15.324039,74.676736 Z M 25.522469,47.908974 7.8840478,73.42375 9.196254,74.330762 26.834674,48.815987 Z m 38.428007,17.822317 v 6.78233 h 1.595842 v -6.78233 z m -39.176058,-0.03428 v 6.78233 h 1.595842 v -6.78233 z m 0.729349,-0.342857 v 1.595843 h 40.036318 v -1.595843 z m 31.427495,-17.772447 -1.43688,0.695065 8.611937,17.794265 1.436882,-0.695064 z",
                    "m 26.787109,65.558594 -1.564453,0.3125 20.392578,75.879556 1.410157,-0.28125 0.158203,0.0274 L 64.957031,65.898437 63.384766,65.625 46.322266,137.13737 Z M 56.881392,0.27682291 34.645575,0.34851118 22.773382,9.9827855 l 0.0187,22.5849085 11.398428,9.303885 21.980235,-0.0062 0.218182,-0.180779 11.68518,-9.643625 0.0187,-22.4134802 z M 56.30477,1.8757821 66.493849,10.372395 66.47821,31.289774 55.597184,40.269503 34.760845,40.275727 24.38787,31.810283 24.369167,10.743295 35.212789,1.9443438 Z m -22.927765,46.0550099 -8.611939,17.794266 1.436882,0.695064 8.611938,-17.794265 z m -15.506475,-7.689341 0.06546,8.83947 8.537132,0.01245 46.478907,0.06233 -0.06546,-8.83947 -0.791687,-0.0032 z m 1.608309,1.595843 51.824355,0.07169 0.04052,5.650901 -44.867479,-0.06233 -6.956875,-0.0094 z m 55.776558,31.249833 -0.0032,1.595842 15.247775,0.0187 V 73.10583 Z M 64.601903,47.612872 63.292813,48.529233 81.383182,74.34323 82.689154,73.426867 Z M 15.320922,73.080893 0.07314787,73.096533 0.07626471,74.692375 15.324039,74.676736 Z M 25.522469,47.908974 7.8840478,73.42375 9.196254,74.330762 26.834674,48.815987 Z m 38.428007,17.822317 v 6.78233 h 1.595842 v -6.78233 z m -39.176058,-0.03428 v 6.78233 h 1.595842 v -6.78233 z m 0.729349,-0.342857 v 1.595843 h 40.036318 v -1.595843 z m 31.427495,-17.772447 -1.43688,0.695065 8.611937,17.794265 1.436882,-0.695064 z",
                    "m 26.787109,65.558594 -1.564453,0.3125 20.392578,102.337886 1.410157,-0.28125 0.158203,0.0274 L 64.957031,65.898437 63.384766,65.625 46.322266,163.5957 Z M 56.881392,0.27682291 34.645575,0.34851118 22.773382,9.9827855 l 0.0187,22.5849085 11.398428,9.303885 21.980235,-0.0062 0.218182,-0.180779 11.68518,-9.643625 0.0187,-22.4134802 z M 56.30477,1.8757821 66.493849,10.372395 66.47821,31.289774 55.597184,40.269503 34.760845,40.275727 24.38787,31.810283 24.369167,10.743295 35.212789,1.9443438 Z m -22.927765,46.0550099 -8.611939,17.794266 1.436882,0.695064 8.611938,-17.794265 z m -15.506475,-7.689341 0.06546,8.83947 8.537132,0.01245 46.478907,0.06233 -0.06546,-8.83947 -0.791687,-0.0032 z m 1.608309,1.595843 51.824355,0.07169 0.04052,5.650901 -44.867479,-0.06233 -6.956875,-0.0094 z m 55.776558,31.249833 -0.0032,1.595842 15.247775,0.0187 V 73.10583 Z M 64.601903,47.612872 63.292813,48.529233 81.383182,74.34323 82.689154,73.426867 Z M 15.320922,73.080893 0.07314787,73.096533 0.07626471,74.692375 15.324039,74.676736 Z M 25.522469,47.908974 7.8840478,73.42375 9.196254,74.330762 26.834674,48.815987 Z m 38.428007,17.822317 v 6.78233 h 1.595842 v -6.78233 z m -39.176058,-0.03428 v 6.78233 h 1.595842 v -6.78233 z m 0.729349,-0.342857 v 1.595843 h 40.036318 v -1.595843 z m 31.427495,-17.772447 -1.43688,0.695065 8.611937,17.794265 1.436882,-0.695064 z",
                ];

                this.lander_paths = [
                    new Path2D(this.lander_svgs[0]),
                    new Path2D(this.lander_svgs[1]),
                    new Path2D(this.lander_svgs[2]),
                    new Path2D(this.lander_svgs[3]),
                    new Path2D(this.lander_svgs[4]),
                ];

                this.y_pos = 100;
                this.x_pos = getRandomIntInclusive(100, canvas.width - 100);

                if (this.x_pos > Math.floor(canvas.width / 2)) {
                    this.angle = 90;
                    this.x_acc = -1;
                } else {
                    this.angle = 270;
                    this.x_acc = 1;
                }

                //get glyph/lander width
                const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                path.setAttribute("d", this.lander_svgs[0]);
                svg.appendChild(path);
                document.body.appendChild(svg);
                const bbox = path.getBBox();
                document.body.removeChild(svg);
                this.glyph_width = bbox.width * this.glyph_scale;
            }

            draw_lander() {
                if (this.rotating_left)
                    this.angle = ((this.angle - this.rotation_rate) % 360 + 360) % 360;

                if (this.rotating_right)
                    this.angle = ((this.angle + this.rotation_rate) % 360 + 360) % 360;

                //apply gravity
                this.y_acc += this.gravity_rate;
                this.y_pos += this.y_acc;

                this.x_pos += this.x_acc;

                var m = document.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGMatrix();
                var transformation =
                    m.translate(this.x_pos, this.y_pos)
                        .scale(this.glyph_scale)
                        .translate(45, 45)
                        .rotate(this.angle)
                        .translate(-45, -45);

                let lander_path = new Path2D();
                lander_path.addPath(this.lander_paths[0], transformation);

                this.check_collision(lander_path);

                if (this.thrusting && !game_over && this.fuel > 0) {
                    document.getElementById('thrust').play();
                    this.fuel -= this.fuel_burn_rate;

                    //Math.sin() Math.cos() take radians.
                    const angle_rad = this.angle * Math.PI / 180;
                    this.x_acc += Math.sin(angle_rad) * this.thrust_rate;
                    this.y_acc += -Math.cos(angle_rad) * this.thrust_rate;

                    if (++this.thrust_anim_tick >= this.thrust_anim_rate) {
                        this.thrust_anim_tick = 0;
                        if (this.lander_path_thrust_animation_n < 4)
                            this.lander_path_thrust_animation_n++;
                        else
                            this.lander_path_thrust_animation_n = 3;
                    }

                    lander_path.addPath(this.lander_paths[this.lander_path_thrust_animation_n], transformation);
                } else {
                    document.getElementById('thrust').pause();
                    document.getElementById('thrust').currentTime = 0;
                    this.lander_path_thrust_animation_n = 0;
                }

                ctx.fillStyle = '#FFF';
                ctx.fill(lander_path);
            }

            check_collision(lander_path) {
                for (let point of terrain_data['terrain']) {
                    if (ctx.isPointInPath(lander_path, point.x, point.y)) {
                        if (this.angle >= 3 && this.angle <= 357) {
                            this.set_crashed();
                            return;
                        }

                        if (this.y_acc >= 0.5 || Math.abs(this.x_acc) >= 0.5) {
                            this.set_crashed();
                            return;
                        }

                        let { _, pad_len, pad_start } = terrain_data;

                        if (this.x_pos <= pad_start || this.x_pos + this.glyph_width >= pad_start + pad_len) {
                            this.set_crashed();
                            return;
                        }

                        this.set_landed();
                    }
                }
            }

            set_crashed() {
                this.crashed = true;
                game_over = true;
            }

            set_landed() {
                if (this.y_acc >= 0.2 || Math.abs(this.x_acc) >= 0.2) {
                    this.marooned = true;
                } else {
                    this.landed = true;
                }

                game_over = true;
            }

            set_thrusting(thrust) {
                if (this.fuel <= 0) {
                    this.thrusting = false;
                    return;
                }

                this.thrusting = thrust ? true : false;
            }

            /*
                consider applying rotation the same way as acceleration (non-linear)
            */

            set_rotate_left(rotating_left) {
                this.rotating_left = rotating_left ? true : false;
            }
            set_rotate_right(rotating_right) {
                this.rotating_right = rotating_right ? true : false;
            }
        }

        function resize_canvas() {
            const dpr = window.devicePixelRatio || 1;
            canvas.width = canvas.clientWidth * dpr;
            canvas.height = canvas.clientHeight * dpr;
        }

        function game_loop() {
            if (game_over)
                return;

            ctx.clearRect(0, 0, canvas.width, canvas.height); // wipe last frame
            draw_background();
            draw_terrain();
            lander.draw_lander();
            draw_hud();
            requestAnimationFrame(game_loop);
        }

        let canvas = document.getElementById('canvas');
        resize_canvas();
        let ctx = canvas.getContext("2d");

        let game_over = true;

        const terrain_data = gen_terrain();
        const hud_fuel_guage = document.querySelector('.fuel_guage');

        image = new Image;
        image.src = "/assets/images/lander/nebula3.webp";

        image.onload = () => {
            draw_background();
            draw_terrain();
        };
    </script>
</body>
</html>
