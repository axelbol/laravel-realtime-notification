# Realtime pizza tracker with Laravel 7 - Vue and Pusher

This is a Laravel 7 project where we work Realtime notifications with Vue.js and Pusher.

This project has 3 branches.

- The __crud__ branch has the starting point to start this project.
- The __realtime__ branch has all the work done and all the configurations done to send realtime notifications.
- The __master__ branch has the final project.

## How to use

Code for [Real-Time Notifications Laravel](https://www.youtube.com/watch?v=r4gHtN_Is4s&list=PLYO5TOinzgTjh0S7EakH2QaUahNb3Yiwz)

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__
- Edit database credentials in __.env__
- Change __BROADCAST_DRIVER__ to __pusher__ in __.env__
- Enter your pusher credentials in __.env__
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__
- Run __npm install__
- Run __npm run dev__
- Run __php artisan serve__ (if you want to use other port add __--port=90__)
- You can __register__ by clicking on top-right

## License

Feel free to use and re-use any way you want.

## More

- Check out my YouTube channel [Dot Coding](https://www.youtube.com/channel/UCYobBTcVkUvIqQW3sSTGarg).
- Feel free to send me an e-mail for support [dot.bol.lp@gmail.com](mailto:dot.bol.lp@gmail.com).

## Tip

After cloning you can see all the branches with _git branch -a_ and you can go to the branch you want with _git checkout BranchName_