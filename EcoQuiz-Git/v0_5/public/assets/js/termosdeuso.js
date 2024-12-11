   const pageURLs = [
    "termosdeuso1.php", 
    "termosdeuso2.php",
    "termosdeuso3.php", 
  ];

  function getCurrentPageIndex() {
    const currentURL = window.location.pathname;
    return pageURLs.indexOf(currentURL.split("/").pop());
  }

  function updatePageInfo() {
    const currentPageIndex = getCurrentPageIndex();
    const currentPage = currentPageIndex + 1;
    const totalPages = pageURLs.length;

    document.getElementById("currentPage").textContent = currentPage;
    document.getElementById("pageInfo").textContent = `Página ${currentPage} de ${totalPages}`;

    document.getElementById("backButton").disabled = currentPageIndex === 0;
    document.getElementById("forwardButton").disabled = currentPageIndex === totalPages - 1;
  }

  function goBack() {
    const currentPageIndex = getCurrentPageIndex();
    if (currentPageIndex > 0) {
      window.location.href = pageURLs[currentPageIndex - 1];
    }
  }

  function goForward() {
    const currentPageIndex = getCurrentPageIndex();
    if (currentPageIndex < pageURLs.length - 1) {
      window.location.href = pageURLs[currentPageIndex + 1];
    }
  }

  updatePageInfo();
