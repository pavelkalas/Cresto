# Cresto
Cresto is a lightweight PHP framework designed with simplicity in mind. With Cresto, you can easily create web pages by organizing your project into a straightforward folder structure.

## Features
- **Simple Architecture**: Create folders for your pages in the `Sections` directory.
- **Easy Routing**: Access your pages using a clean URL format: `your-domain.com/?route=pagename`.
- **Separation of Concerns**: Keep your header and body content separate for better maintainability.

## Getting Started
To get started with Cresto, follow these steps:

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/yourusername/cresto.git
    cd cresto
    ```

2. **Directory Structure**:  
   Create your pages within the `Section` folder like this:  




3. **File Structure**:
- `headers.php`: Contains all necessary `<head>` tags for your page.
- `index.php`: Contains the body content that will be rendered to the template in `Layout.php`.

4. **Accessing Your Pages**:  
   To view your page, simply navigate to: ` your-domain.com/?route=pagename `
and replace pagename with your page created in folder src -> sections -> yourpage


### Sample `headers.php`
```php
<title>Hello, World</title>
<link rel="stylesheet" href="src/Assets/cresto.css">
```

### Sample `index.php`
```php
<div class="sample-element">
    <h1>Hello, World!</h1>
    <p>This is just sample page created in Cresto PHP framework.</p>
</div>
```

### How to create page
1. Go to the ` src/Sections ` and create folder named as your page, ex.: ` about-me ` so your folder will be ` src/Sections/about-me `
2. Then create ` index.php ` and ` headers.php ` in this folder.
3. Add important imports to ` headers.php ` like CSS or JS imports, meta tags etc..
4. Add your HTML code to ` index.php ` (without <body> tag, it's presented automatically by default Layout.php)
5. Go to your page ` your-domain.com/?route=about-me `