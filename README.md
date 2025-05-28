# PHP

Welcome to the PHP project!

## About PHP

**PHP** (Hypertext Preprocessor) is a popular server-side scripting language designed for web development. It enables you to create dynamic web pages, interact with databases, and handle user input efficiently. 

### Founded By

PHP was created by Rasmus Lerdorf.

### Founded At

PHP was first released in 1995.

### php written in

C language

## What is a Server-Side Scripting Language?

A server-side scripting language runs on the web server, not in the user's browser. This approach allows the server to process requests, manage data, and generate customized content before sending the final output to the client's browser.

## Versions of PHP

- **PHP 1**: Released in 1995 as a set of CGI scripts.
- **PHP 2**: Released in 1997; introduced support for accessing databases and cookies.
- **PHP 3**: Released in 1998; added support for object-oriented programming (OOP) and dynamic loading of extensions.
- **PHP 4**: Released in 2000; added support for sessions, output buffering, and a number of new extensions.
- **PHP 5**: Released in 2004; introduced improved support for object-oriented programming, the PHP Data Objects (PDO) extension for database access, and better XML support.
- **PHP 6**: Development started around 2005, but it was never officially released. PHP 6 aimed to introduce native Unicode support, but the project faced significant technical challenges and performance issues. As a result, PHP 6 was abandoned, and its improvements were gradually incorporated into later versions, starting with PHP 5.3 and PHP 7.
- **PHP 7**: Released in 2015; brought major performance improvements, reduced memory usage, introduced scalar type declarations, return type declarations, the null coalescing operator (`??`), and anonymous classes. PHP 7 also removed many deprecated features and provided better error handling with throwable exceptions.
- **PHP 8**: Released in 2020; introduced the Just-In-Time (JIT) compiler for better performance, union types, named arguments, attributes (annotations), match expressions, and improvements to error handling. PHP 8 also added constructor property promotion and enhanced type system features.
- **PHP 8.2**: Released in December 2022; introduced readonly classes, true type for constants, deprecated dynamic properties, new `disjunctive normal form` types, and performance improvements. PHP 8.2 also enhanced enums and added new functions and deprecations.

**LAMP** stands for **Linux, Apache, MySQL, and PHP**. It is a popular stack of open-source software used to run dynamic websites and web applications. Each component serves a specific purpose:

- **Linux**: The operating system.
- **Apache**: The web server software.
- **MySQL**: The database management system.
- **PHP**: The server-side scripting language.

Together, these technologies provide a robust environment for developing and deploying web applications.
## What is CSRF?

**CSRF** (Cross-Site Request Forgery) is a web security vulnerability where an attacker tricks a user's browser into performing unwanted actions on a different website where the user is authenticated.

### Example Scenario

Suppose you are logged into your bank account in one browser tab. In another tab, you visit a malicious website. That site can attempt to send a request to your bank (such as transferring money) without your knowledge. Since you are already logged in, the bank may process the request, believing it came from you.

### How Laravel Prevents CSRF

Laravel protects against CSRF by adding a unique token to every form:

```html
<input type="hidden" name="_token" value="some-random-code">
```

When the form is submitted, Laravel checks if the token is valid and if the request originated from your site. If the token is missing or invalid, Laravel blocks the request, preventing CSRF attacks.

**In summary:**  
CSRF is like someone forging your signature while you are logged in. Laravel prevents this by requiring a secret code (token) with each form submission—only your website can generate and verify this code.


## Refined Explanation of CSRF

CSRF is a web attack where you log in to a trusted site (let’s call it Web A) in one tab, and then unknowingly open a malicious site (Web B) in another tab.

The malicious site (Web B) can secretly try to send a request to Web A (such as transferring money or changing your password), using your active login session.

To prevent this, Web A uses a CSRF token—a secret value included in all forms or requests.

When the form is submitted, Web A checks if the token is correct:

- ✅ If it's valid, the request is allowed.
- ❌ If it's invalid or missing, the request is blocked.

**One-line Summary:**  
CSRF is like someone else sending commands using your login. The CSRF token proves it was really you who sent the request.

---


Feel free to explore the code and contribute!
