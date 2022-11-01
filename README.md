# Photo API Documentation

## Introduction

This is an API for a photo gallery made using laravel PHP.


## API Documentation

### Photos

## 1. Photos Endpoints

### 1.1 Add Photo

**URL:** *<base_url>/api/photo/add*

**Method:** *POST*

**JSON Data:**

```json
{
 "name": "Photo Name",
 "description": "Photo Description",
 "photo": "Photo File Path"
}
```

**Response:**

```json
{
 "id": 1,
 "name": "Photo Name",
 "description": "Photo Description",
 "photo": "Photo File Path",
 "in_albums": [],
 "created_at": "2020-01-01 00:00:00",
 "updated_at": "2020-01-01 00:00:00"
}
```

### 1.2 Get Photo

**URL:** *<base_url>/api/photo/{id}*

**Method:** GET

**Response:**

```json
{
 "id": 1,
 "name": "Photo Name",
 "description": "Photo Description",
 "photo": "Photo File Path",
 "in_albums": [],
 "created_at": "2020-01-01 00:00:00",
 "updated_at": "2020-01-01 00:00:00"
}
```

### 1.3 List Photos

**URL:** *<base_url>/api/photo/list*

**Method:** GET

**Response:**

```json
[
	{
	 "id": 1,
	 "name": "Photo Name",
	 "description": "Photo Description",
	 "photo": "Photo File Path",
	 "in_albums": [],
	 "created_at": "2020-01-01 00:00:00",
	 "updated_at": "2020-01-01 00:00:00"
	},
	{
	 "id": 2,
	 "name": "Photo Name",
	 "description": "Photo Description",
	 "photo": "Photo File Path",
	 "in_albums": [],
	 "created_at": "2020-01-01 00:00:00",
	 "updated_at": "2020-01-01 00:00:00"
	}
]
```

### 1.4 Update Photo

**URL:** *<base_url>/api/photo/{id}/update*

**Method:** *POST*

**JSON Data:**

```json
{
 "name": "Photo Name",
 "description": "Photo Description",
 "photo": "Photo File Path"
}
```

**Response:** 

```json
{
 "msg": "Photo updated successfully"
}
```

### 1.5 Delete Photo

**URL:** *<base_url>/api/photo/{id}/delete*

**Method:** *POST*

**Response:** 

```json
{
 "msg": "Photo deleted successfully"
}
```

---

## 2. Albums Endpoints

### 2.1 Add Album

**URL:** *<base_url>/api/album/add*

**Method:** *POST*

**JSON Data:**

```json
{
 "name": "Album Name",
 "description": "Album Description",
 "photos": [1, PHOTO_ID] 
}
```

**Response:**

```json
{
  "id": 1,
  "name": "Album Name",
  "description": "Album Description",
	"photos": [
	  {
	    "id": 1,
	    "name": "Photo Name",
	    "description": "Photo Description",
	    "photo": "Photo File Path",
	    "created_at": "2020-01-01 00:00:00",
	    "updated_at": "2020-01-01 00:00:00"
	  }
	],
  "created_at": "2020-01-01 00:00:00",
  "updated_at": "2020-01-01 00:00:00"
 }
```

### 1.2 Get Album

**URL:** *<base_url>/api/album/{id}*

**Method:** GET

**Response:**

```json
{
  "id": 1,
  "name": "Album Name",
  "description": "Album Description",
	"photos": [
	  {
	    "id": 1,
	    "name": "Photo Name",
	    "description": "Photo Description",
	    "photo": "Photo File Path",
	    "created_at": "2020-01-01 00:00:00",
	    "updated_at": "2020-01-01 00:00:00"
	  }
	],
  "created_at": "2020-01-01 00:00:00",
  "updated_at": "2020-01-01 00:00:00"
 }
```

### 1.3 List Albums

**URL:** *<base_url>/api/album/list*

**Method:** GET

**Response:**

```json
[
 {
  "id": 1,
  "name": "Album Name",
  "description": "Album Description",
	"photos": [
	  {
	    "id": 1,
	    "name": "Photo Name",
	    "description": "Photo Description",
	    "photo": "Photo File Path",
	    "created_at": "2020-01-01 00:00:00",
	    "updated_at": "2020-01-01 00:00:00"
	  }
	],
  "created_at": "2020-01-01 00:00:00",
  "updated_at": "2020-01-01 00:00:00"
 },
 {
  "id": 2,
  "name": "Album Name",
  "description": "Album Description",
	"photos": [],
  "created_at": "2020-01-01 00:00:00",
  "updated_at": "2020-01-01 00:00:00"
 }
]
```

### 1.4 Update Album

**URL:** *<base_url>/api/album/{id}/update*

**Method:** *POST*

**JSON Data:**

```json
{
 "name": "Album Name",
 "description": "Album Description",
 "photos": [1, PHOTO_ID] 
}
```

**Response:** 

```json
{
 "msg": "Album updated successfully"
}
```

### 1.5 Delete Album

**URL:** *<base_url>/api/album/{id}/delete*

**Method:** *POST*

**Response:**
```json
{
 "msg": "Album deleted successfully"
}
```
