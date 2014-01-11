<script>
	// Copyright 2014 Fabio Vitalba

	function generate_bg()
	{
		var codeList = document.getElementsByClassName("code");
		var index;
		var newHTML;

		for (index = 0; index < codeList.length; index++) {
			newHTML = add_spans(codeList[index].innerHTML);
			codeList[index].innerHTML = newHTML;
		}
	}

	function add_spans(content)	{
		var formattedContent = "";
		var regex = /<br\s*[\/]?>/gi;
		var codeLines = content.split(regex);
		var index;

		for (index = 0; index < codeLines.length; index++)	{
			if ((index % 2) == 0)	{
				codeLines[index] = "<span id='code-line-dark'>" + codeLines[index] + "<br/></span>";
			}	else	{
				codeLines[index] = "<span id='code-line-bright'>" + codeLines[index] + "<br/></span>";
			}
		}

		for (index = 0; index < codeLines.length; index++)	{
			formattedContent += codeLines[index];
		}

		return formattedContent;
	}
	
</script>