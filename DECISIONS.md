# 🧠 Technical Decision Record (TDR)

**Project:** NK Construction Portfolio Website
**Author:** Themba Ntimane
**Version:** 2.0.0 (Under Development)

---

## 📌 1. Purpose

This document captures the key technical decisions made during the development of the NK Construction Portfolio Website, including the rationale, trade-offs, and future considerations.

It provides transparency into **why specific technologies and approaches were chosen**, and how the system is evolving over time.

---

## 🎯 2. Decision Approach

The project followed a **progressive and pragmatic engineering approach**:

* Deliver value quickly using simple tools
* Avoid unnecessary complexity in early stages
* Continuously improve architecture based on evolving needs
* Plan for scalability without overengineering

---

## 🧱 3. Frontend Technology Decisions

### ✅ Decision: Use Bootstrap 5 (Initial Version)

**Context:**
A fast and responsive UI was required for early delivery.

**Decision:**
Bootstrap 5 was used to accelerate development with pre-built components.

**Rationale:**

* Rapid prototyping and development
* Built-in responsiveness
* Reduced need for custom CSS

**Trade-offs:**

* Limited design flexibility
* Risk of generic UI appearance

---

### ✅ Decision: Use Tailwind CSS

**Context:**
More control over design and styling was needed beyond Bootstrap.

**Decision:**
Tailwind CSS was introduced alongside Bootstrap.

**Rationale:**

* Utility-first styling approach
* Faster customization
* Greater design flexibility

**Trade-offs:**

* Increased complexity in HTML markup
* Learning curve for utility classes

---

### 💡 Decision Insight

Combining Bootstrap and Tailwind was a **deliberate trade-off**:

* Bootstrap → speed
* Tailwind → flexibility

This approach balanced **delivery time vs customization**.

---

## ⚙️ 4. Backend Decision (Initial)

### ✅ Decision: Use PHP for Mail Handling

**Context:**
The system required only basic backend functionality (contact form).

**Decision:**
PHP was used to handle email submissions.

**Rationale:**

* Simple and effective solution
* Minimal setup required
* No need for a full backend system

**Trade-offs:**

* Not scalable for advanced features
* Limited extensibility

---

## 🌐 5. Deployment Decision

### ✅ Decision: Use Netlify

**Context:**
A fast, reliable, and easy deployment solution was required.

**Decision:**
Netlify was used for hosting and deployment.

**Rationale:**

* Simple CI/CD workflow
* Global CDN for performance
* Free tier suitable for demo projects

**Trade-offs:**

* Limited backend capabilities
* Not ideal for complex server-side logic

---

## 🚀 6. Upgrade Decision (v2.0.0)

### ✅ Decision: Migrate to Next.js

**Context:**
The application required better scalability, performance, and modern architecture.

**Decision:**
Adopt Next.js as the primary frontend framework.

**Rationale:**

* Supports SSR and SSG
* Improves SEO and performance
* Enables full-stack capabilities
* Industry-standard framework

**Trade-offs:**

* Increased complexity
* Requires deeper React knowledge

---

## 🗂 7. Content Management Decision

### ✅ Decision: Use Payload CMS

**Context:**
Manual content updates were inefficient and not scalable.

**Decision:**
Introduce a headless CMS for content management.

**Rationale:**

* Admin dashboard for non-technical users
* Dynamic content updates
* Built-in authentication support
* File upload capabilities

**Trade-offs:**

* Added backend complexity
* Requires database integration

---

## 🔐 8. Authentication Decision

### ✅ Decision: Implement Admin Login System (Planned)

**Context:**
Secure content management is required for
