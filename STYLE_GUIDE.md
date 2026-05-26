# Team Style Guide

## 2.1 Naming Conventions

| Element | Convention | Example |
|---------|------------|---------|
| Variables | camelCase | residentName |
| Functions / Methods | camelCase | generateCertificate() |
| Classes | PascalCase | AppointmentManager |
| Files | kebab-case | resident-login.html |
| Constants | UPPER_SNAKE_CASE | MAX_USERS |
| Database tables / fields | snake_case | appointment_records |

---

## 2.2 Formatting Rules

| Rule | Team Decision |
|------|---------------|
| Indentation | 4 spaces |
| Line length limit | Max 100 characters |
| Brace style | Opening brace on same line |
| Spaces vs. tabs | Spaces only |
| Blank lines between functions | 1 blank line |
| Max function length | 50 lines |

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