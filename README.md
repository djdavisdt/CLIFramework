# DT CLI

The PHP "CliFramework" was used to build my hack-day CLI tool. I choose this framework for speed, but would not suggest for production use.
Application is in /working/dtci


# Authentication

Access, Secret and Organic keys are currently hard coded in /working/dtci

# Set up

- Install PHP 5 (or higher)
- Set up credentials in /working/dtci
- Alias /working/dtci to whatever you want

# Commands

- dtcli add-number: adds a tollfree, local, or true 800 number
- dtcli delete-number: deletes a number
- dtcli cdr: pulls CDR report

Interactive prompts will guide you the rest of the way!
