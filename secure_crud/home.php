<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px 30px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fff, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border: 2px solid white;
        }

        .user-name {
            color: white;
            font-weight: 600;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .stat-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .stat-value {
            font-size: 32px;
            font-weight: bold;
            color: white;
            margin-bottom: 5px;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
        }

        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .activity-section, .quick-actions {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .section-title {
            color: white;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .activity-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
        }

        .activity-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .activity-icon {
            font-size: 24px;
        }

        .activity-content {
            flex: 1;
        }

        .activity-text {
            color: white;
            font-size: 14px;
            margin-bottom: 3px;
        }

        .activity-time {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
        }

        .action-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid white;
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-btn:hover {
            background: white;
            color: #667eea;
            transform: translateX(5px);
        }

        .chart-section {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .chart-placeholder {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            header {
                flex-direction: column;
                gap: 15px;
            }
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #fff, #e0e0e0);
            border-radius: 10px;
            animation: progress 2s ease-out;
        }

        @keyframes progress {
            from { width: 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <span>🚀</span>
                <span>Dashboard</span>
            </div>
            <div class="user-section">
                <div class="user-name">Welcome, User</div>
                <div class="user-avatar">👤</div>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">📊</div>
                <div class="stat-value">2,543</div>
                <div class="stat-label">Total Views</div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%;"></div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-value">1,248</div>
                <div class="stat-label">Active Users</div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 60%;"></div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">💰</div>
                <div class="stat-value">$12,543</div>
                <div class="stat-label">Revenue</div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 85%;"></div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⭐</div>
                <div class="stat-value">98.5%</div>
                <div class="stat-label">Satisfaction</div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 98%;"></div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="activity-section">
                <h2 class="section-title">Recent Activity</h2>
                <div class="activity-item">
                    <div class="activity-icon">📝</div>
                    <div class="activity-content">
                        <div class="activity-text">New project created: Website Redesign</div>
                        <div class="activity-time">2 hours ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">✅</div>
                    <div class="activity-content">
                        <div class="activity-text">Task completed: Update database schema</div>
                        <div class="activity-time">5 hours ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">👤</div>
                    <div class="activity-content">
                        <div class="activity-text">New user registered: john@example.com</div>
                        <div class="activity-time">1 day ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">💬</div>
                    <div class="activity-content">
                        <div class="activity-text">New comment on your post</div>
                        <div class="activity-time">2 days ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">🔔</div>
                    <div class="activity-content">
                        <div class="activity-text">System update completed successfully</div>
                        <div class="activity-time">3 days ago</div>
                    </div>
                </div>
            </div>

            <div class="quick-actions">
                <h2 class="section-title">Quick Actions</h2>
                <button class="action-btn">
                    <span>➕</span>
                    <span>Create New Project</span>
                </button>
                <button class="action-btn">
                    <span>📤</span>
                    <span>Upload File</span>
                </button>
                <button class="action-btn">
                    <span>👥</span>
                    <span>Invite Team Member</span>
                </button>
                <button class="action-btn">
                    <span>📊</span>
                    <span>View Reports</span>
                </button>
                <button class="action-btn">
                    <span>⚙️</span>
                    <span>Settings</span>
                </button>
            </div>
        </div>

        <div class="chart-section">
            <h2 class="section-title">Analytics Overview</h2>
            <div class="chart-placeholder">
                📈 Chart visualization would go here
            </div>
        </div>
    </div>
</body>
</html>