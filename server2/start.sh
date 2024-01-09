#!/bin/bash
exec service ssh start &
exec apache2-foreground
