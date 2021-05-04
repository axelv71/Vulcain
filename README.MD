# Vulcain

![Vulcain](/app/assets/img/volcan.png)

<br>

Vulcain is a project manager to help you create and manage your web projects.
It installs directly on your local web server

<br>

## Installation

1. Download the repository and install it at the root of the "<em>www</em>" folder of your local server.

2. Create a database and call it whatever you want

3. Edit database variables in "<em>.env.php</em>"

```php
$_ENV['DB_HOST'] = "localhost";  // Your database address
$_ENV['DB_DATABASE'] = "vulcain"; // Your database name
$_ENV['DB_USERNAME'] = "root"; // Your database username
$_ENV['DB_PASSWORD'] = ""; // Your database password
```

<br>

## Add your own css framework

1. Add your file to the "<em>/app/resources/</em>" folder. Your file must be in <strong>.zip</strong>

2. Add an array in the variable "<em>$\_ENV['RS_CSS']</em>", containing the information of your file.

```php
// Framework CSS ressources
$_ENV['RS_CSS'] =  [ // Framework CSS ressources
    ["Tailwind", "tailwind", false],
    ["Bootstrap", "bootstrap", true],
    [YOUR_FRAMEWORK_NAME, ZIP_FILE_NAME, true or false]
];
```

- The first parameter of the array must contain the name of your css framework.
- The second parameter of the array must contain the name of the <strong>.zip</strong> file.
- For the third parameter, if your framework contains javascript files, put <strong>true</strong> otherwise put <strong>false</strong>.

 <br>

## Add your own project

1. Add your file to the "<em>/app/resources/</em>" folder. Your file must be in <strong>.zip</strong>
2. Add an array in the variable "$\_ENV['RS_PROJECT']", containing the information of your project.

```php
// Add project fast build
$_ENV['RS_PROJECT'] = [
   [PROJECT_NAME, ZIP_FILE_NAME]
];
```

- The first parameter of the array must contain the name of your css framework.
- The second parameter of the array must contain the name of the <strong>.zip</strong> file.

<br>

## Add an existing projects

For add an existing project move your project into the "<em>/public/</em>" folder and in the application goto <strong>Create project</strong> and <strong>Add an existing project</strong>.
