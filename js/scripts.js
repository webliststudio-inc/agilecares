function _downloadBrochure(event) {
    event.preventDefault();
    const url = websiteUrl + '/brochure/AGILE-SLS-Trifold-Brochure.pdf';
    const link = document.createElement('a');
    link.href = url;
    link.download = 'AGILE-SLS-Trifold-Brochure.pdf';
    document.body.appendChild(link);
    link.click();
    link.remove();
}