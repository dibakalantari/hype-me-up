# Develop a Laravel app on Sail using Twilio programmable Voice, SMS and SendGrid

This project was for Twilio Developer Voices on September 2022. The mission was to choose one of the of the available themes, and write a code and tutorial of that code for Twilio blog. 

This was the theme that this project was based on :

> December: Gift of Code
> 
> The Golden Rule says that “it’s better to give than to receive” and December is the perfect time of the year to share our best. Kick off the Holiday Season by using your coding skills to build a gift for someone special in your life.

And basically this gift sends an inspirational quote to that special someone every day, but in order to avoid getting boring it does it through different communication channels: -call -SMS -Email
Which I have used Twilio products for.

Here is the link to the tutorial of this project:

https://docs.google.com/document/d/1GoNtCnmlQpxxd-SmiO3td0KWVHx24Yw-Oiy44iIBZSc/edit#heading=h.jk5b6tce0pp6 

And in order to run this project all you have to do is:

```bash
git clone git@github.com:dibakalantari/hype-me-up.git

cd hype-me-up

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
    
./vendor/bin/sail up
```
