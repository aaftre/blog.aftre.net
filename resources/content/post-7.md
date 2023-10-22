---
post_id: 7
view: layout.post
path: /post-7
date: 2023-10-19
posts_section: [ 6, 5, 4, 3, 2, 1 ]
---

# Minimum viable blog

For many years I would enjoy working through various diverse projects (setting up routers and firewalls, a NAS, an eggdrop bot etc...).  I would finish the project and maybe need to come back to it some time later finding that I have forgotten key details about the implementation.  With no documentation to refresh my memory revisiting projects was arduous.

> Keeping a blog seems like one way to fill this requirement.

Personally I wouldn't be one for a blogging platform. I'd like to retain some control over content, design and avoid platform/vendor lockin. Three separate but related philosophies generally drive my approach to projects; [minimum viable product](https://en.wikipedia.org/wiki/Minimum_viable_product), [suckless philosophy](https://suckless.org/philosophy/) and the [unix philosophy](https://en.wikipedia.org/wiki/Unix_philosophy). And also [cheapness](/assets/images/7/1.gif).

Initially I attempted to use a a $1 FreeBSD server which I maintained on atlantic.net.  It already hosted OpenVPN that I used as an endpoint for Netflix traffic/content. At the time wordpress was the blogging standard and $1 got you 256MB of memory.  Cramming FreeBSD, OpenVPN, PHP-FPM, nginx, and MySQL into such a limited memory footprint proved a tad unstable.  The database was really the killer.  Most wordpress sites should not only really be read only, but also static sites.

The above afformentioned reasons also prevented me from using a managed service.  I'd like to keep this as simple as possible.  Somewhat of a contradiction to the unfortunate direction of modern day web development.  I explored several options.  Being fairly vendor/brand agnostic I looked for a platform that fulfilled the following criteria; 

1. Is a static site generator.
2. Has no database dependancy.
3. Was written in PHP as I have PHP experience.
4. Uses blade templates.

Without a database content can be stored in markdown.  I still want the ability to post media such as photos, videos, and pdfs on my blog.  [Jamstack](https://jamstack.org/generators/) provides a convenient interface to compare static site generators. 

Cleaver looked like the best option.  A blade template PHP based static site generator.  It also has tailwind built in along with support for Vue and jQuery if you need such things.

> Oh yes, FOSS.

Cleaver seemed like the best option, but Unfortunately it also seems like abandon ware.  After cloning the repository and following the process documentation results in errors.

```
Building Site
=============
+ hello-world.json rendered to /

» 1 page built in 58.41ms


/app/webpack.mix.js:30
                    command.get('php cleaver build', (error, stdout, stderr) => {
                            ^

TypeError: command.get is not a function
    at Object.fn (/app/webpack.mix.js:30:29)
    at FSWatcher.emit (node:events:527:28)
    at FSWatcher.emitWithAll (/app/node_modules/chokidar/index.js:541:32)
    at FSWatcher._emit (/app/node_modules/chokidar/index.js:632:8)
    at listener (/app/node_modules/chokidar/lib/nodefs-handler.js:370:20)

Node.js v17.9.0
```

An existing [issue](https://github.com/aschmelyun/cleaver/issues/65) on Github hasn't been tended to in months.  Fortunately it was a simple fix.  The great thing about FOSS is you can send patches.  So I submitted a [pull request](https://github.com/aschmelyun/cleaver/pull/68/commits)... which also remained disregarded for months.  But at least I'm able to still use the free open software I patched myself.  

![xlimage](/assets/images/7/2.png)

I also took the opportunity to add a feature to the markdown compiler.  In the blade template I wanted the ability to access the title as its own entity.  This would make things more flexible and let me embed the title in an anchor tag.  To do this simply use regex to extract and replace the first level 1 heading occurance and assign the value to a variable in the $json object.

```php
        /*
        *   Extract title from markdown
        */
        $pattern = '/^#\s+(.+)$/m';
        
        if (preg_match($pattern, $body, $matches)) 
        {
            $json->title = $matches[1];
            $body = preg_replace($pattern, '', $body);
        }    

        $parsedown = new \ParsedownExtra();
        $json->body = $parsedown->text($body);

        return $json;
```

Whichever features I need in a simple static site I can then define conventions for on top of what Cleaver provides.  It's fairly versatile and a good product, I just wish it were actively maintained.

Hosting a static site on Github pages seems natural. Whats more effcient than not hosting your own server platform.  I run Cleaver in a docker container locally and when it is committed and pushed to git, a Github [action](https://github.com/aaftre/blog.aftre.net/blob/main/.github/workflows/main.yml) runs the build and deployment process, which commits the generated content to a new branch - [gh-pages](https://github.com/aaftre/blog.aftre.net/tree/gh-pages).

> And voila! a wild blog appears!

The repository lives here; https://github.com/aaftre/blog.aftre.net/ and contains everything needed to run the local docker container using docker-compose, through to the Github action responsible for building the site and publishing the content to Github pages.
