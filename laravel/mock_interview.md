## Self Introduction

I am A. Micheal Raj, a Full Stack Developer with 2 years of experience in PHP, Laravel, and .NET. I have developed ERP and financial systems, handling both front-end and back-end tasks.

Recently, I have focused on building RESTful APIs with Laravel, implementing secure authentication, and creating responsive UIs using HTML, CSS, and JavaScript. I am proficient with MySQL and SQL Server, and have deployed applications on shared hosting with Apache.

I am also familiar with JavaScript frameworks like React and have integrated them into Laravel projects. I prioritize writing clean, reusable code and continuously improving system performance.

---

### Mock Interview Question 1 – Laravel (Intermediate)

**Q1:**  
You're building a blog platform using Laravel. Each user can write many posts.

- **How would you define this relationship in Eloquent?**
- **How would you retrieve all posts written by a specific user?**

#### Correct Approach

**Relationship Type:**  
This is a one-to-many relationship (one user, many posts).

**Eloquent Relationship Setup:**

In the `User` model:
```php
public function posts()
{
    return $this->hasMany(Post::class);
}
```

In the `Post` model:
```php
public function user()
{
    return $this->belongsTo(User::class);
}
```

**Fetching Posts of a Specific User:**
```php
$user = User::find(1); // Get user with ID 1
$posts = $user->posts; // Fetch all posts written by that user
```
> Using `Post::all()` would return all posts from all users, not just one user.

**Quick Recap:**
- Use `hasMany` when one user has many posts.
- `one-to-one` is for cases like `User` and `UserProfile`.
- `Post::all()` fetches all records, not user-specific.

Q2:
How do you validate a form request in Laravel to ensure:

name is required and max 100 characters

email is required and unique in the users table

age is optional but must be a number if present

Write how you would do it in a controller method.

$validated = $request->validate([
    'name' => 'required|string|max:100',
    'email' => 'required|string|email|unique:users,email',
    'age' => 'nullable|numeric',
]);

🟢 Explanation
'required': field must be present and not empty.

'string': must be a string type.

'max:100': maximum 100 characters.

'unique:users,email': email must be unique in the users table.

'nullable|numeric': age is optional, but must be a number if present.
