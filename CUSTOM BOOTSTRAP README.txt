http://getbootstrap.com/docs/3.3/customize/

For sites using boostrap 3.3, you may go to the address above and change the @brand-primary to the hex value of the
primary color you will be using for your site.

After setting the color, scroll down to the bottom and click "Compile and Download"

This css is NOT to replace the base bootstrap css, but rather add to the site in addition to the base bootstrap css.

The only components you should need are the bootstrap.css and bootstrap.min.css files in the css folder.

Once downloaded, I typically rename each css file to add the site title to the back end of the css.
For example, SCP's custom bootstrap was named bootstrapscp.css and bootstrapscp.min.css.

Once this new css is added into the head.html _includes folder, it will change the default color of things like
urls and btn-primary to the new primary color you just made.