# Laravel API Guide

## 1. Set Up API Routes

In `routes/api.php`, add:

```php
use App\Http\Controllers\Api\BrandController;

Route::apiResource('brands', BrandController::class);
```

This creates these routes:

| Method | Endpoint              | Action   |
|--------|----------------------|----------|
| GET    | /api/brands          | index    |
| POST   | /api/brands          | store    |
| GET    | /api/brands/{id}     | show     |
| PUT    | /api/brands/{id}     | update   |
| DELETE | /api/brands/{id}     | destroy  |

---

## 2. Create Controller

Generate the controller:

```bash
php artisan make:controller Api/BrandController --api
```

This creates a controller with basic API methods at `app/Http/Controllers/Api/BrandController.php`.

---

## 3. Controller Methods

### index()

```php
public function index()
{
    return response()->json(Brand::all());
}
```
- **Purpose:** List all brands.
- **How:** Fetches all brands and returns as JSON.

**Example response:**
```json
[
  { "id": 1, "name": "Nike", "added_by": 1, "added_at": "2024-01-01" },
  { "id": 2, "name": "Adidas", "added_by": 1, "added_at": "2024-02-01" }
]
```

---

### store(Request $request)

```php
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $validated['added_by'] = auth()->id() ?? 1;
    $validated['added_at'] = now();

    $brand = Brand::create($validated);

    return response()->json(['message' => 'Brand created', 'data' => $brand], 201);
}
```
- **Purpose:** Create a new brand.
- **How:** Validates input, adds metadata, creates brand, returns JSON.

**Example request:**
```json
{ "name": "Reebok" }
```

---

### show($id)

```php
public function show($id)
{
    $brand = Brand::findOrFail($id);
    return response()->json($brand);
}
```
- **Purpose:** Get a single brand by ID.
- **How:** Finds brand or returns 404.

**Example URL:** `GET /api/brands/1`

**Example response:**
```json
{
  "id": 1,
  "name": "Nike",
  "added_by": 1,
  "added_at": "2024-01-01"
}
```

---

### update(Request $request, $id)

```php
public function update(Request $request, $id)
{
    $brand = Brand::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $validated['edited_by'] = auth()->id() ?? 1;
    $validated['edited_at'] = now();

    $brand->update($validated);

    return response()->json(['message' => 'Brand updated', 'data' => $brand]);
}
```
- **Purpose:** Update an existing brand.
- **How:** Finds brand, validates, updates, returns JSON.

**Example request:**
```json
{ "name": "Reebok Updated" }
```

---

### destroy($id)

```php
public function destroy($id)
{
    $brand = Brand::findOrFail($id);
    $brand->delete();

    return response()->json(['message' => 'Brand deleted']);
}
```
- **Purpose:** Delete a brand by ID.
- **How:** Finds and deletes brand, returns message.

**Example:** `DELETE /api/brands/1`

**Response:**
```json
{ "message": "Brand deleted" }
```

---

## 4. Summary Table

| Method  | Purpose               | HTTP Verb | Route              |
| ------- | --------------------- | --------- | ------------------ |
| index   | List all brands       | GET       | `/api/brands`      |
| store   | Create new brand      | POST      | `/api/brands`      |
| show    | Get one brand by ID   | GET       | `/api/brands/{id}` |
| update  | Update existing brand | PUT       | `/api/brands/{id}` |
| destroy | Delete brand          | DELETE    | `/api/brands/{id}` |

---

## 5. Common HTTP Status Codes

| Code | Meaning              | Use Case                       |
|------|----------------------|-------------------------------|
| 200  | OK                   | General success               |
| 201  | Created              | Resource added                |
| 204  | No Content           | Success, no data              |
| 400  | Bad Request          | Invalid input                 |
| 401  | Unauthorized         | Not logged in                 |
| 403  | Forbidden            | Not allowed                   |
| 404  | Not Found            | Resource missing              |
| 422  | Unprocessable Entity | Validation failed             |
| 500  | Server Error         | Server-side error             |

---

## 6. The `abort()` Helper

Laravel's `abort()` stops execution and returns an error code.

**Example:**
```php
abort(404);
```
- Stops processing and returns 404 Not Found.

**With custom message:**
```php
abort(403, 'You do not have permission to access this resource.');
```

**When to use:**
- User not authorized
- Resource missing/restricted
- Manual error handling

---

## ✅ Key Points

- Use `201` for successful creation.
- Use `abort()` to return error status codes.
- Always return the correct status code for clarity.
