
# Laravel PHP Cheat Sheet for Interview

## Create Project Procedure

1. **Install Laravel via Composer:**
    ```bash
    composer create-project laravel/laravel project-name
    ```

    - To create a Laravel project with a specific version, use:
        ```bash
        composer create-project laravel/laravel project-name "10.*"
        ```
      Replace `"10.*"` with your desired Laravel version.

2. **Set Up Environment:**
    - Copy `.env.example` to `.env`
    - Configure database and other settings in `.env`

3. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

4. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

5. **Start Development Server:**
    ```bash
    php artisan serve
    ```

6. **Access Application:**
    - Open [http://localhost:8000](http://localhost:8000) in your browser.

## 1. Routing (`web.php`)

```php
// Basic GET Route
Route::get('/home', [HomeController::class, 'index']);

// POST Route
Route::post('/submit', [FormController::class, 'store']);

// Named Route
Route::get('/profile', [UserController::class, 'profile'])->name('profile');

// Route with Parameter
Route::get('/user/{id}', [UserController::class, 'show']);
```

---

## 2. Controller

**Command:**

```bash
php artisan make:controller UserController
```

**Example:**

```php
class UserController extends Controller {
    public function show($id) {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
}
```

---

## 3. Blade Template

**master.blade.php**

```blade
<html>
  <body>
    @yield('content')
  </body>
</html>
```

**child.blade.php**

```blade
@extends('master')

@section('content')
  <h1>Hello, {{ $user->name }}</h1>
@endsection

@if($user->active)
    Active
@else
    Inactive
@endif

@foreach($users as $user)
    {{ $user->name }}
@endforeach
```

---

## 4. Eloquent ORM (Model)

```php
// Fetch All
$users = User::all();

// Where Clause
$users = User::where('status', 'active')->get();

// Create Record
User::create(['name' => 'John', 'email' => 'john@example.com']);

// Update
$user = User::find(1);
$user->name = 'Updated';
$user->save();

// Delete
User::destroy(1);
```

---

## 5. Relationships

```php
// One-to-Many
public function posts() {
    return $this->hasMany(Post::class);
}

// Belongs To
public function user() {
    return $this->belongsTo(User::class);
}
```

---

## 6. Form Validation

```php
$request->validate([
    'name' => 'required|max:255',
    'email' => 'required|email',
]);
```

---

## 7. Migrations

**Command:**

```bash
php artisan make:migration create_users_table
```

**Schema:**

```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});
```

---

## 8. Artisan Commands

```bash
php artisan route:list       # Show all routes
php artisan make:model Post
php artisan migrate
php artisan tinker           # Test queries interactively
```

---

## 9. Middleware

**Create Middleware:**

```bash
php artisan make:middleware CheckAge
```

**Example:**

```php
class CheckAge {
    public function handle($request, Closure $next) {
        if ($request->age < 18) {
            return redirect('home');
        }
        return $next($request);
    }
}
```

---

## 10. Authentication

- Use **Laravel Breeze** or **Jetstream** for quick auth scaffolding.
- Manually: use `Auth::attempt()`, `Auth::user()`, middleware like `auth`.

---

## 11. File Upload (Basic)

```php
if ($request->hasFile('photo')) {
    $path = $request->file('photo')->store('photos');
}
```

---

## 12. Laravel Helpers

```php
dd($data);        // Dump & Die
now();            // Current date/time
url('path');      // Generate URL
route('name');    // Generate route URL
asset('img.jpg'); // Get asset path
```
