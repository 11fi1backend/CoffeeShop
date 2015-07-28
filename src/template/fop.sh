#!/bin/bash
FOFILE=$1
PDFFILE=$2

cd /etc/coffeeshop/fop-2.0/build/
java -jar fop.jar -fo ../invoice_fo/$FOFILE -pdf ../invoice_pdf/$PDFFILE