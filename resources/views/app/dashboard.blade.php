<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita Management Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet">
</head>
<body>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-base-200 p-4">
      <h2 class="text-xl font-bold mb-6">Berita Management</h2>
      <ul class="menu bg-base-200 w-full">
        <li><a href="#" class="active">Dashboard</a></li>
        <li><a href="#">Posts</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Comments</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </div>

    <!-- Content Area -->
    <div class="flex-1 bg-base-100">
      <!-- Header -->
      <div class="navbar bg-base-300">
        <div class="flex-1">
          <a class="btn btn-ghost normal-case text-xl">Berita Dashboard</a>
        </div>
        <div class="flex-none gap-2">
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="https://placeimg.com/80/80/people" alt="User Avatar" />
              </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="p-6">
        <!-- Welcome -->
        <h1 class="text-2xl font-bold">Welcome to Berita Dashboard</h1>
        <p class="text-sm mt-2">Manage your Berita effectively with this dashboard.</p>

        <!-- Berita Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
          <div class="stat bg-primary text-primary-content">
            <div class="stat-title">Total Posts</div>
            <div class="stat-value">152</div>
            <div class="stat-desc">+10 this week</div>
          </div>
          <div class="stat bg-secondary text-secondary-content">
            <div class="stat-title">Categories</div>
            <div class="stat-value">12</div>
            <div class="stat-desc">Stable</div>
          </div>
          <div class="stat bg-accent text-accent-content">
            <div class="stat-title">Comments</div>
            <div class="stat-value">320</div>
            <div class="stat-desc">↗︎ 20 this week</div>
          </div>
          <div class="stat bg-info text-info-content">
            <div class="stat-title">Active Users</div>
            <div class="stat-value">45</div>
            <div class="stat-desc">↗︎ 5 today</div>
          </div>
        </div>

        <!-- Recent Posts -->
        <div class="mt-8">
          <h2 class="text-xl font-bold mb-4">Recent Posts</h2>
          <div class="overflow-x-auto">
            <table class="table w-full">
              <!-- Head -->
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>How to Start Beritaging</td>
                  <td>Tutorial</td>
                  <td><span class="badge badge-success">Published</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-error">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>Top 10 Beritaging Tools</td>
                  <td>Resources</td>
                  <td><span class="badge badge-warning">Draft</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-error">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>Understanding SEO for Beritas</td>
                  <td>SEO</td>
                  <td><span class="badge badge-success">Published</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-error">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
