---
# title: Database Basics
# subtitle: DBMS Lab
# author: Arnav Dixit
# date: \today
# toc: true
# numbersections: true
codeBlockCaptions: true
geometry:
- top=20mm
- left=20mm
- right=20mm
- bottom=20mm
pagesize: a4
header-includes: 
 \usepackage{tocloft}
 \renewcommand{\cftsecleader}{\cftdotfill{\cftdotsep}}
 \usepackage{float}
 \let\origfigure\figure
 \let\endorigfigure\endfigure
 \renewenvironment{figure}[1][2] {
     \expandafter\origfigure\expandafter[H]
 } {
     \endorigfigure
 }
 \renewcommand\thesection{\arabic{section}}
 \usepackage{fancyhdr}
    \pagestyle{fancy}
    \fancyfoot[CO,CE]{Page \thepage}
    # \fancyhead[CO,CE]{Assignment}
    # \fancyfoot[LE,RO]{\thepage}

 
---

\begin{titlepage}
		\begin{center}
			\vspace*{1cm}
			
			\Huge
			\textbf{ASSIGNMENT}\\
			
			
			\vspace{0.5cm}
			\LARGE
			DBMS Lab\\
			\vspace{1cm}
			
			\Large
			February 22, 2021\\
            
			\vspace{1.5cm}
			\LARGE
			\textbf{Arnav Dixit}\\
			\large
			191112034, CSE-1 \\ 
			
			\vfill
			\LARGE
			Company Database Queries II
			
			\vspace{1.8cm}
			
			\includegraphics[width=0.4\textwidth]{../../manit}
			
			\Large
			Computer Science Department\\
			MANIT, Bhopal\\
			
			
		\end{center}
	\end{titlepage}

\newpage
\tableofcontents

---
