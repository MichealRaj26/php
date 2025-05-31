## What is a Model in Laravel?
A Model in Laravel is a PHP class that represents a table in your database. Models use Eloquent ORM to let you interact with your database using an object-oriented approach.

**Key points about models:**
- Each model corresponds to a database table.
- Each row in the table is represented as an instance of the model.
- Models provide methods for creating, retrieving, updating, and deleting records.

## What is Eloquent ORM?

Eloquent ORM is Laravel’s built-in Object Relational Mapper that follows the ActiveRecord pattern. It allows you to work with database tables as PHP objects, making CRUD (Create, Read, Update, Delete) operations simple. Eloquent also makes it easy to define relationships between tables using PHP code.

## Example

Suppose you have a table named `basic_cruds`. You can generate a model for it with:

```bash
php artisan make:model BasicCrud
```

This creates a file at:

```
app/Models/BasicCrud.php
```

Example `BasicCrud` model:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicCrud extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's naming convention
    protected $table = 'basic_cruds';

    // Attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'age',
        'created_at',
        'updated_at'
    ];
}
```

**Key parts of a model:**

| Property/Method         | Description                                                      |
|-------------------------|------------------------------------------------------------------|
| `protected $table`      | Manually set the table name (optional if Laravel guesses it)     |
| `protected $fillable`   | Array of fields that can be mass assigned                        |
| `protected $guarded`    | Fields you want to protect from mass assignment                  |
| `use HasFactory`        | Enables usage of factories for testing/seeding                   |
| Relationships           | Define relationships (e.g., `hasMany`, `belongsTo`) with models  |

## Usage Examples

### 1. Create a Record

```php
BasicCrud::create([
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
    'address' => 'City',
    'dob' => '1990-01-01',
    'age' => 33,
]);
```
> **Note:** The fields must be listed in `$fillable` for mass assignment to work.

### 2. Find a Record

```php
$record = BasicCrud::find(1);

// Or using a condition
$record = BasicCrud::where('email', 'john@example.com')->first();
```

### 3. Update a Record

```php
$record = BasicCrud::find(1);
$record->update([
    'name' => 'Updated Name'
]);
```

### 4. Delete a Record

```php
$record = BasicCrud::find(1);
$record->delete();
```

---

### ✅ Summary Table

| Operation | Example                                      |
|-----------|----------------------------------------------|
| Create    | `BasicCrud::create([...])`                   |
| Read      | `BasicCrud::find($id)` or `BasicCrud::all()` |
| Update    | `$record->update([...])`                     |
| Delete    | `$record->delete()`                          |


## Why Use Relationships?

In real-world applications, database tables are often connected. For example:

- A user can have many posts.
- A post belongs to one user.
- An order has many products.

Laravel lets you define these connections in your model classes, making it easy to work with related data.

---

## Types of Relationships (Simple Explanation)

### 1. One to One

**Example:** One user has one profile.

- Each user fills out their profile (name, bio, photo).
- One user → One profile, and one profile belongs to one user.

**Database:**
- `users` table has `id`
- `profiles` table has `user_id`

**Usage:**
```php
User::find(1)->profile; // Get the profile of user 1
```

**Model Definitions:**
```php
// User Model
public function profile()
{
    return $this->hasOne(Profile::class);
}

// Profile Model
public function user()
{
    return $this->belongsTo(User::class);
}
```

---

### 2. One to Many

**Example:** One user has many posts.

- Like Instagram: one user can create many posts.
- One user → Many posts, each post belongs to one user.

**Database:**
- `users` table has `id`
- `posts` table has `user_id`

**Usage:**
```php
User::find(1)->posts; // Get all posts written by user 1
```

**Model Definitions:**
```php
// User Model
public function posts()
{
    return $this->hasMany(Post::class);
}

// Post Model
public function user()
{
    return $this->belongsTo(User::class);
}
```

---

### 3. Many to Many

**Example:** A student can join many courses, and a course can have many students.

- Requires a pivot table (e.g., `course_student`).

**Usage:**
```php
$student->courses; // All courses of this student
$course->students; // All students in this course
```

**Model Definitions:**
```php
// Student Model
public function courses()
{
    return $this->belongsToMany(Course::class);
}

// Course Model
public function students()
{
    return $this->belongsToMany(Student::class);
}
```

**Attach Example:**
```php
$student->courses()->attach($courseId); // Add course to student
```

---

### 4. Has Many Through (Advanced)

**Example:** A country has many posts through users.

- A country has many users.
- Each user writes many posts.
- So, a country has many posts through users.

**Database:**
- `countries` table
- `users` table has `country_id`
- `posts` table has `user_id`

**Usage:**
```php
Country::find(1)->posts; // Get all posts from users who live in country 1
```

**Model Definition:**
```php
// Country Model
public function posts()
{
    return $this->hasManyThrough(Post::class, User::class);
}
```

---

### 🔄 Summary Table

| Relationship      | Example                   | Method in Model           |
|-------------------|--------------------------|---------------------------|
| One to One        | User → Profile           | `hasOne` / `belongsTo`    |
| One to Many       | User → Posts             | `hasMany` / `belongsTo`   |
| Many to Many      | Student ↔ Courses        | `belongsToMany`           |
| Has Many Through  | Country → Posts (via User) | `hasManyThrough`        |
