<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sriindi Group 19 E-Commerce Platform - Setup Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: Arial, sans-serif; margin: 2em; background: #f9f9f9; color: #222; }
    h1, h2, h3 { color: #2d3e50; }
    code, pre { background: #eee; padding: 2px 6px; border-radius: 4px; }
    pre { padding: 1em; overflow-x: auto; }
    ul { margin-left: 2em; }
    .section { margin-bottom: 2em; }
    .badge { background: #0052cc; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 0.9em; }
  </style>
</head>
<body>
  <h1>Sriindi Group 19 E-Commerce Platform</h1>
  <p>
    <span class="badge">Laravel</span>
    <span class="badge">MySQL</span>
    <span class="badge">Blade</span>
    <span class="badge">Bootstrap</span>
    <span class="badge">Livewire</span>
    <span class="badge">Chart.js</span>
  </p>
  <p>
    A feature-rich e-commerce solution built with Laravel featuring an admin dashboard, product management, and real-time analytics.
  </p>

  <div class="section">
    <h2>Tech Stack</h2>
    <ul>
      <li><b>Backend:</b> Laravel 10</li>
      <li><b>Database:</b> MySQL</li>
      <li><b>Frontend:</b> Blade Templates, Bootstrap 5</li>
      <li><b>Interactivity:</b> Livewire</li>
      <li><b>Charts:</b> Chart.js</li>
      <li><b>Server:</b> PHP 8.1+</li>
    </ul>
  </div>

  <div class="section">
    <h2>Installation Guide</h2>
    <h3>Prerequisites</h3>
    <ul>
      <li>PHP 8.1 or higher</li>
      <li>Composer 2.5+</li>
      <li>Node.js 18+</li>
      <li>MySQL 8.0+</li>
      <li>Git</li>
    </ul>

    <h3>Setup Instructions</h3>
    <ol>
      <li>
        <b>Clone Repository</b>
        <pre><code>git clone https://github.com/FOTGroupProject/Sriindi_group19.git
cd Sriindi_group19</code></pre>
      </li>
      <li>
        <b>Install Dependencies</b>
        <pre><code>composer install
npm install</code></pre>
      </li>
      <li>
        <b>Configure Environment</b>
        <pre><code>cp .env.example .env</code></pre>
        <p>Update database credentials in <code>.env</code>:</p>
        <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password</code></pre>
      </li>
      <li>
        <b>Generate Application Key</b>
        <pre><code>php artisan key:generate</code></pre>
      </li>
      <li>
        <b>Database Setup</b>
        <pre><code>php artisan migrate --seed
php artisan storage:link</code></pre>
      </li>
      <li>
        <b>Build Assets</b>
        <pre><code>npm run build</code></pre>
      </li>
      <li>
        <b>Start Development Server</b>
        <pre><code>php artisan serve</code></pre>
      </li>
    </ol>
  </div>

  <div class="section">
    <h2>Admin Access</h2>
    <ul>
      <li><b>Email:</b> admin@example.com</li>
      <li><b>Password:</b> password123</li>
    </ul>
    <p><i><b>Important:</b> Change these credentials after your first login!</i></p>
  </div>

  <div class="section">
    <h2>Key Features</h2>
    <ul>
      <li>Product Management (CRUD operations, categories, inventory)</li>
      <li>Financial Dashboard with Chart.js analytics</li>
      <li>Order &amp; Purchase Tracking</li>
      <li>Admin Account Management (roles &amp; permissions)</li>
      <li>Responsive UI (Bootstrap, Blade)</li>
      <li>Dynamic Interactivity (Livewire components)</li>
    </ul>
  </div>

  <div class="section">
    <h2>Troubleshooting</h2>
    <ul>
      <li><b>Missing Dependencies:</b> Run <code>composer install &amp;&amp; npm install</code></li>
      <li><b>Migration Issues:</b> Check your <code>.env</code> database settings</li>
      <li><b>Asset Loading:</b> Run <code>php artisan storage:link</code></li>
      <li><b>Livewire Components:</b> Clear cache with <code>php artisan view:clear</code></li>
    </ul>
  </div>

  <div class="section">
    <h2>Chart.js Integration</h2>
    <p>Ensure Chart.js is loaded in your Blade templates:</p>
    <pre><code>&lt;script src="https://cdn.jsdelivr.net/npm/chart.js"&gt;&lt;/script&gt;</code></pre>
  </div>

  <div class="section">
    <h2>License</h2>
    <p>MIT License - See <code>LICENSE.md</code> for details.</p>
  </div>
</body>
</html>
