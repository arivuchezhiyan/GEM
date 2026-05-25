import os
import re

workspace_dir = r"c:\Users\arivu\Downloads\gem chennai backup 22 c5 26"
php_files = [f for f in os.listdir(workspace_dir) if f.endswith(".php")]

report = []

for file_name in php_files:
    file_path = os.path.join(workspace_dir, file_name)
    if not os.path.exists(file_path):
        continue
    
    with open(file_path, "r", encoding="utf-8", errors="ignore") as f:
        content = f.read()
    
    # Find all FontAwesome icons and img icons
    fa_icons = re.findall(r'<i\s+class=["\'](fa-solid|fa-regular|fa-light|fa-brands|fa)\s+([^"\']+)["\']', content)
    img_icons = re.findall(r'<img\s+[^>]*class=["\']([^"\']*-icon[^"\']*)["\']', content)
    
    # Also find any other FontAwesome icon pattern
    other_fa = re.findall(r'class=["\'](fa-[^"\']+)["\']', content)
    
    if fa_icons or img_icons or other_fa:
        report.append(f"========================================")
        report.append(f"FILE: {file_name}")
        report.append(f"========================================")
        
        if fa_icons:
            report.append("--- FontAwesome Icons ---")
            for prefix, icon_name in fa_icons:
                report.append(f"  Prefix: {prefix} | Icon: {icon_name}")
                
        if img_icons:
            report.append("--- Image Icons ---")
            for img_class in img_icons:
                report.append(f"  Img Class: {img_class}")
                
        if other_fa:
            report.append("--- Other Class Icons ---")
            for cls in other_fa:
                report.append(f"  Class: {cls}")
        report.append("")

with open("scratch_all_icons_list.txt", "w", encoding="utf-8") as out:
    out.write("\n".join(report))
print("Generated scratch_all_icons_list.txt successfully!")
