# Team Style Guide
Barangay Clearance and Certificate Management System

## 2.1 Naming Conventions

| Element                  | Convention       | Example                                         |
|--------------------------|------------------|-------------------------------------------------|
| Variables                | camelCase        | appointmentId, residentName                     |
| Functions / Methods      | camelCase        | generateReferenceNumber(), approveAppointment() |
| Classes                  | PascalCase       | DatabaseConnection, DashboardMetrics            |
| Files                    | kebab-case       | staff-login.html, main-dashboard.html           |
| Constants                | UPPER_SNAKE_CASE | DB_HOST, STR_PAD_LEFT                           |
| Database tables / fields | snake_case       | appointment_statuses, reference_number          |

---

## 2.2 Formatting Rules

| Rule                              | Team Decision               |
|-----------------------------------|-----------------------------|
| Indentation                       | 4 spaces                    |
| Line length limit                 | max 120 characters          |
| Brace style                       | One True Brace Style (1TBS) |
| Spaces vs tabs                    | Spaces only                 |
| Blank lines between functions     | Exactly 1 blank line        |
| Max function length               | 30 lines                    |

---

## 2.3 Commenting Standards

| Commenting Rule | Team Standard |
|----------------|---------------|
| File/module header comment | Describe purpose of module |
| Function/method doc comment | Document parameters and return values |
| Inline comments | Only for complex logic |
| TODO comment format | TODO: description |
| Language | English |

---

## 2.4 Branch Naming Strategy

| Branch Type | Naming Format | Example |
|-------------|---------------|---------|
| Feature branch | feature/<short-desc> | feature/resident-login |
| Bug fix branch | fix/<short-desc> | fix/auth-error |
| Hotfix branch | hotfix/<short-desc> | hotfix/database |
| Release branch | release/<version> | release/v1.0 |