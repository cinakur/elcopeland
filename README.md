# LimeCuda Project Starter
Starter project for LimeCuda client projects.

## Github Setup
1. Download zip of this repository
2. Add files to the root of development site
3. Run `git init`
4. Create a new Github repository for the project
5. Run `git remote add origin {new repo}` making the repo created above the origin for the new project.
6. run `npm install`

## Getting the project ready for working
1. Rename the theme folder to match the new project
2. Update the `.gitignore` file to not ignore the new theme name
3. Update the `themeName` variable in the gulpfile.js file to match new theme name
4. Update CHILD_THEME_NAME variable in the functions.php file
5. Start `gulp watch` in terminal
6. Go to wp-content/themes/{theme-name}/assets/scss/style.scss to update theme details
7. Once compiled, run the initial commit

## Dev
1. Update colors in "globals.scss" to match branding
2. Add logo.png and logo@2x.png file
3. Update logo size in `core/all-screens/_header.scss`
4. Enqueue proper fonts in Google Font request in wp_enqueue_script() in functions.php
5. Update font names and weights variables in "globals.scss"
6. Determine entry padding, if content background === body background set $contentPadding variable to 0
