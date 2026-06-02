  <style>
    /* === Base styles === */
    body {
      font-family: "Segoe UI", Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background: #f7f7f7;
      color: #333;
    }

    header {
      background: linear-gradient(135deg, #4a90e2, #357ab7);
      color: white;
      padding: 4rem 2rem;
      text-align: center;
    }

    main {
      max-width: 1000px;
      margin: auto;
      padding: 2rem;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: white;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    button {
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 8px;
      background: #4a90e2;
      color: white;
      cursor: pointer;
      transition: 0.3s;
      font-size: clamp(14px, 2vw, 16px);
    }
    button:hover {
      background: #357ab7;
    }

    footer {
      text-align: center;
      padding: 2rem;
      color: #666;
    }

    /* === Fluid typography scale === */
    h1 { font-size: clamp(28px, 5vw, 40px); margin-bottom: 1rem; }
    h2 { font-size: clamp(24px, 4vw, 32px); margin-bottom: 1rem; }
    h3 { font-size: clamp(20px, 3.5vw, 28px); margin-bottom: 0.75rem; }
    h4 { font-size: clamp(18px, 3vw, 24px); margin-bottom: 0.5rem; }
    p  { font-size: clamp(14px, 2vw, 18px); margin-bottom: 1rem; }
    small { font-size: clamp(12px, 1.5vw, 14px); }

    /* === Extra control at breakpoints === */
    @media (max-width: 600px) {
      header { padding: 2rem 1rem; }
      h1 { font-size: 26px; }
      h2 { font-size: 22px; }
      h3 { font-size: 20px; }
      p  { font-size: 13px; }
      button { font-size: 14px; }
    }

    @media (min-width: 1000px) {
      h1 { font-size: 42px; }
      h2 { font-size: 36px; }
      h3 { font-size: 30px; }
      p  { font-size: 19px; }
      button { font-size: 17px; }
    }

/* === Travel article layout additions === */

.container {
  max-width: 1100px;
  margin: auto;
  padding: 2rem;
}

.hero img {
  width: 100%;
  height: auto;
  border-radius: 12px;
}

.caption {
  font-size: 14px;
  margin-top: 0.5rem;
  color: #555;
}

.image-row {
  display: flex;
  gap: 1.5rem;
  margin-top: 2rem;
}

.image-box {
  flex: 1;
}

.image-box img {
  width: 100%;
  height: auto;
  border-radius: 12px;
}

/* Stack images vertically on small screens */
@media (max-width: 768px) {
  .image-row {
    flex-direction: column;
  }
}




/* === Slide-in Side Panel === */

.side-panel {
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  max-width: 90%;
  height: 100%;
  background: white;
  box-shadow: -4px 0 15px rgba(0,0,0,0.2);
  transition: right 0.4s ease;
  z-index: 9999;
  overflow-y: auto;
}

.side-panel.active {
  right: 0;
}

.panel-content {
  padding: 2rem;
}

.close-btn {
  font-size: 28px;
  cursor: pointer;
  float: right;
}
  </style>