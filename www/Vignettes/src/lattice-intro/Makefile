
R_PROG = R
## put alternative definitions in Makevars
-include Makevars

TEX_COMPS = defs
RNW_COMPS = lattice-intro lattice-intro-slides

all: lattice-intro.pdf

clean:
	rm -f *.log *.dvi *.ps *.toc *.nav *.out *.vrb *.aux *.snm *.R figs/* *~ */*~

%.tex: %.Rnw
	${R_PROG} CMD Sweave $<
	rm -f Rplots.pdf Rplots.ps

%.R: %.Rnw
	${R_PROG} CMD Stangle $<

%.dvi : %.tex
	${R_PROG} CMD texi2dvi -q -c $<

%.ps : %.dvi
	${R_PROG} CMD dvips -o -q $<

%.pdf : %.tex
	${R_PROG} CMD pdflatex $<
	${R_PROG} CMD pdflatex $<
	${R_PROG} CMD pdflatex $<

%-4.tex: %.pdf
	@echo "\\documentclass[letterpaper,landscape,frame]{article}" > $@
	@echo "\\usepackage{pdfpages}" >> $@
	@echo "\\begin{document}" >> $@
	@echo "\\includepdf[nup=2x2,column,pages=-]{"$*".pdf}" >> $@
	@echo "\\end{document}" >> $@

%-4.pdf: %-4.tex
	texi2dvi --pdf $<
	texclean $<

%-2.tex: %.pdf
	@echo "\\documentclass[letterpaper]{article}" > $@
	@echo "\\usepackage{pdfpages}" >> $@
	@echo "\\begin{document}" >> $@
	@echo "\\includepdf[nup=1x2,pages=1-]{"$*".pdf}" >> $@
	@echo "\\end{document}" >> $@

%-2.pdf: %-2.tex
	texi2dvi --pdf $<
	texclean $<



%-6.tex: %.pdf
	@echo "\\documentclass[letterpaper]{article}" > $@
	@echo "\\usepackage{pdfpages}" >> $@
	@echo "\\begin{document}" >> $@
	@echo "\\includepdf[nup=2x3,pages=-]{"$*".pdf}" >> $@
	@echo "\\end{document}" >> $@

%-6.pdf: %-6.tex
	texi2dvi --pdf $<
	texclean $<

%-6.dvi: %-6.tex
	texi2dvi -q -c $<
	texclean $<




%-8.tex: %.pdf
	@echo "\\documentclass[letterpaper]{article}" > $@
	@echo "\\usepackage{pdfpages}" >> $@
	@echo "\\begin{document}" >> $@
	@echo "\\includepdf[nup=2x4,column,pages=-]{"$*".pdf}" >> $@
	@echo "\\end{document}" >> $@

%-8.pdf: %-8.tex
	texi2dvi --pdf $<
	texclean $<

%-8.dvi: %-8.tex
	texi2dvi -q -c $<
	texclean $<






%-shrunk.tex: %.pdf
	@echo "\\documentclass[letterpaper]{article}" > $@
	@echo "\\usepackage{pdfpages}" >> $@
	@echo "\\begin{document}" >> $@
	@echo "\\includepdf[nup=1x1,scale=0.9,pages=-]{"$*".pdf}" >> $@
	@echo "\\end{document}" >> $@
	TEXINPUTS=${TPUTS} texi2dvi -c -q --pdf $@

%-shrunk.pdf: %-shrunk.tex
	texi2dvi --pdf $<
	texclean $<

%-shrunk.dvi: %-shrunk.tex
	texi2dvi -q -c $<
	texclean $<
