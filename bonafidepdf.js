    document.getElementById('generatePdfButton').addEventListener('click', async () => {
        // Create a new PDF document;

        
        const pdfDoc = await PDFDocument.create();
        const page = pdfDoc.addPage([400, 200]);

        // Add text to the page
        const contentStream = page.drawText('Hello, PDF!', {
          x: 50,
          y: 150,
          size: 30,
          color: rgb(0, 0, 0), // Black color
        });

        // Serialize the PDF document to bytes
        const pdfBytes = await pdfDoc.save();

        // Create a Blob from the PDF bytes
        const pdfBlob = new Blob([pdfBytes], { type: 'application/pdf' });

        // Create a download link and trigger the download
        const link = document.createElement('a');
        link.href = URL.createObjectURL(pdfBlob);
        link.download = 'example.pdf';
        link.click();

        console.log('PDF created successfully.');
      });
    