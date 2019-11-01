# My personal website - pengw.in
Just the source code that builds my website, https://pengw.in. How useful that is to anyone else, ¯\\_(ツ)_/¯ 

## Uses
 * [Jigsaw](https://github.com/tightenco/jigsaw)
 * Components from Jigsaw's [Blog Template](https://github.com/tightenco/jigsaw-blog-template)
 * [Mini.css](https://github.com/Chalarangelo/mini.css)
 * [webfonts generator](https://github.com/sunflowerdeath/webfonts-generator#readme) and some vectors from [FontAwesome](https://fontawesome.com/)

 ## Setup
  - Make sure you have Composer and nodejs/npm set up
  - Check the repo out
  - `composer install and npm install`

 ## Development
 As jigsaw says, `npm run watch` to develop locally

 ## Time to publish
 I wrote `update-site.sh` to do that for me. Github is confusing with its .io domains/branches and how jigsaw publishes he site, so this script automates publishing changes to [my github pages repository](https://github.com/ThePengwin/ThePengwin.github.io). Obviously you can't commit, but if the script is useful to you, take it!
 
